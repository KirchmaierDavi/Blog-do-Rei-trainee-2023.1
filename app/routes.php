<?php

use App\Controllers\AdmControllerPost;
use App\Core\Router;

    $router->get('admin', 'AdmControllerPost@view');
    $router->get('admin/delete', 'AdmControllerPost@delete');
    $router->get('admin/create', 'AdmControllerPost@create');


    $router->get('home', 'AdmControllerPost@viewLanding');

?> 
