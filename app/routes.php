<?php

use App\Controllers\AdmControllerPost;
use App\Core\Router;

 
    $router->get('admin', 'AdmControllerPost@view');
    $router->get('admin/delete', 'AdmControllerPost@delete');
    $router->get('admin/create', 'AdmControllerPost@create');


    $router->post('posts/postIndividual', 'AdmControllerPost@postIndividual');
    $router->get('posts', 'AdmControllerPost@postsList');

    
    $router->get('home', 'AdmControllerPost@viewLanding');
    $router->get('login', 'AdmControllerPost@viewLogin');

    //UserList
    
    $router -> get('user', 'UserController@view');
    $router -> post('user/create', 'UserController@newUser');
    $router -> post('user/update', 'UserController@editUser');
    $router -> post('user/delete', 'UserController@deleteUser');

?> 
