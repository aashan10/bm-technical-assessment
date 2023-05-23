### Installation Guide
1. Clone the repository
2. Install the dependencies by running `composer install`. If you don't have composer installed, you can download it [here](https://getcomposer.org/download/).
   Although, there aren't any dependencies required to run the application, some like `symfony/var-dumper` were used during debugging and development.
3. Run the application by running `php -S localhost:8000 -t public` in the root directory of the project.

## Tasks
### Javascript
1. The library to perform simple dom related tasks is at `public/js/library.js` file.
2. 3 concurrent post requests are at `public/js/post-requests.js` file.
3. The clipboard functionality is at `public/js/clipboard.js` file.
4. Two-way binding is at `public/js/two-way-binding.js` file.
   - You can view the two-way binding in action by going to `http://localhost:8000/`.
### PHP
1. The conversion for XML to JSON is at `app/Services/GeoInfoService.php` file.
2. The price filtering and addition is at `app/Services/PriceCalculationService.php` file.
3. The database connectivity is at `app/Services/DatabaseService.php` file.
4. The post request API is at `app/Controllers/PagesController.php` file.
5. The routes for the application are at `routes.php` file.
6. The views for the application are at `views` directory.