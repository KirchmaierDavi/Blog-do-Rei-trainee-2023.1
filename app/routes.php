<?php

use App\Controllers\AdmControllerPost;
use App\Core\Router;

 
    $router->get('admin/postList', 'AdmControllerPost@view');
    $router->post('admin/postList/delete', 'AdmControllerPost@delete');
    $router->post('admin/postList/create', 'AdmControllerPost@create');


    $router->post('posts/postIndividual', 'AdmControllerPost@postIndividual');
    $router->get('posts', 'AdmControllerPost@postsList');

    
    $router->get('home', 'AdmControllerPost@viewLanding');
    $router->get('login', 'AdmControllerPost@viewLogin');

    //UserList
    
    $router -> get('admin/userList', 'UserController@view');
    $router -> post('admin/userList/create', 'UserController@newUser');
    $router -> post('admin/userList/update', 'UserController@editUser');
    $router -> post('admin/userList/delete', 'UserController@delete');

?> 
