<?php

class UsersController extends BaseController {

    public function index() {
        // Handle GET request (default)
        // Get all users from DB, eager load all fields using '*'
        $users = User::find($this->app->db, '*');

        // Render view 'views/index.php' and pass users variable there
        $this->app->renderView('index', array(
            'params'     => $this->params,
            'users'      => $users,
        ));
    }

    public function create() {
         // Create new instance of user
        $user = new User($this->app->db);

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

            http_response_code(400);

            $this->app->renderPartial('errors', array(
                'params'     => $this->params,
                // 'users'      => $users,
                'pageErrors' => $pageErrors,
            ));
        } else {
            $users = User::find($this->app->db, '*');

            $this->app->renderPartial('users', array(
                'users'      => $users,
            ));
        }


    }
}