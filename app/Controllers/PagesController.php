<?php

namespace BM\Controllers;

class PagesController
{

    public function home()
    {

        include __DIR__ . '/../../views/home.php';

    }

    public function xmlToJson()
    {

        $service = new \BM\Services\GeoInfoService();

        $data = $service->getData();
        include __DIR__ . '/../../views/xml-to-json.php';

    }

    public function validation()
    {
        $data = $_POST;
        $errors = [];

        if (!isset($data['id'])) {
            $errors['id'] = 'ID is required';
        } else {
            if (!is_numeric($data['id'])) {
                $errors['id'] = 'ID must be a number';
            }
        }

        if (!isset($data['value'])) {
            $errors['value'] = 'Value is required';
        } else if (!is_string($data['value'])) {
            $errors['value'] = 'Name must be a string';
        } else if (strlen($data['value']) < 1) {
            $errors['value'] = 'Value must have at least 1 character';
        }

        if (count($errors) > 0) {
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'errors' => $errors,
                'data' => $data,
                'message' => 'There were errors in your submission.'
            ]);
            return;
        }

        http_response_code(200);
        echo json_encode([
            'success' => false,
            'errors' => $errors,
            'data' => $data,
            'message' => 'Your submission was successful.'
        ]);

    }

}