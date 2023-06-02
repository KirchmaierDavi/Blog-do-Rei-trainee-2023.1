<?php

use App\Controllers\AdmControllerPost;
use App\Controllers\LoginController;
use App\Core\Router;

    $router->get('admin', 'AdmControllerPost@view');
    $router->get('admin/delete', 'AdmControllerPost@delete');
    $router->get('admin/create', 'AdmControllerPost@create');

    $router->get('views', 'LoginController@view');
    $router->post('views', 'LoginController@confirmLogin');

?> 
