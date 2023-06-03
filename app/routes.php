<?php

use App\Controllers\UserController;
use App\Core\Router;

    $router -> get('admin', 'UserController@view');
    $router -> post('admin/create', 'UserController@newUser');
    $router -> post('admin/update', 'UserController@editUser');
    $router -> post('admin/delete', 'UserController@deleteUser');

?>