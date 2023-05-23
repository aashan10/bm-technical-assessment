<?php

namespace BM\Services;

class DatabaseService {

    protected \PDO $connection;

    protected static $instance = null;
    private function __construct(
        string $host,
        string $username,
        string $password,
        string $database
    )
    {
        $this->connection = new \PDO(
            "mysql:host=$host;dbname=$database",
            $username,
            $password
        );
    }

    public static function getInstance(): DatabaseService
    {
        // Using DI containers would be best in these cases instead of singletons
        // Packages like php-di/php-di, the laravel IoC container or the Symfony DI container can help with this
        // Also, the $_ENV variables should be in a .env file and not in the $_ENV superglobal
        // Packages like vlucas/phpdotenv can help with this
        if (self::$instance === null) {
            self::$instance = new DatabaseService(
                $_ENV['DB_HOST'],
                $_ENV['DB_USERNAME'],
                $_ENV['DB_PASSWORD'],
                $_ENV['DB_DATABASE']
            );
        }
        return self::$instance;
    }

    public function query(
        string $sql,
        array $params = []
    ): array
    {
        $statement = $this->connection->prepare($sql);
        $statement->execute($params);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }


    // This is a magic method that allows us to call methods on the instance without having to call getInstance() first
    // For example, we can call DatabaseService::query() instead of DatabaseService::getInstance()->query()
    // This is not a good practice, but it is a good example of how magic methods work
    // Instead of this, we should use dependency injection containers and the Facade pattern in Laravel
    public static function __callStatic(string $name, array $arguments)
    {
        if (method_exists(self::getInstance(), $name) && is_callable(self::getInstance()->$name)) {
            return self::getInstance()->$name(...$arguments);
        }

        throw new \Exception("Method $name does not exist.");
    }
}
