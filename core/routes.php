<?php

// TODO: create something that matches on the path to pick a controller
$controller = new UsersController($app);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $controller->create();
        break;
    case 'GET':
        $controller->index();
        break;
}
