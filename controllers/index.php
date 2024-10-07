<?php

$pageErrors = false;
$params     = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create new instance of user
    $user = new User($app->db);

    // Insert it to database with POST data
    $result = $user->insert(array(
        'name'         => $_POST['name'],
        'email'        => $_POST['email'],
        'city'         => $_POST['city'],
        'phone_number' => $_POST['phone_number']
    ));

    if ($result === false) {
        $pageErrors = $user->errors();
        $params     = $_POST;
    } else {
        $params = [];
    }
}

// Handle GET request (default)
// Get all users from DB, eager load all fields using '*'
$users = User::find($app->db, '*');

// Render view 'views/index.php' and pass users variable there
$app->renderView('index', array(
    'params'     => $params,
    'users'      => $users,
    'pageErrors' => $pageErrors,
));
