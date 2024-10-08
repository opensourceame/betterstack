<?php

class BaseController {
    protected $app;
    protected $params;

    public function __construct($app) {
        $this->app = $app;

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'POST':
                $this->params = $_POST;
                break;
            case 'GET':
                $this->params = $_GET;
                break;
        }
    }
}