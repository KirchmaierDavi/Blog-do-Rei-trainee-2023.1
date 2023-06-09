<?php

// use App\Controllers\AdmControllerPost;
// use App\Core\Router;

    //Dashboard
    $router -> get('admin', 'DashboardController@view');

    //UserList
    
    $router -> get('admin/userList', 'UserController@view');
    $router -> post('admin/userList/create', 'UserController@newUser');
    $router -> post('admin/userList/update', 'UserController@editUser');
    $router -> post('admin/userList/delete', 'UserController@delete');

    //PostList
 
    $router->get('admin/postList', 'AdmControllerPost@view');
    $router->post('admin/postList/delete', 'AdmControllerPost@delete');
    $router->post('admin/postList/create', 'AdmControllerPost@create');

    //Site-Pages

    $router->post('posts/postIndividual', 'PostIndividualController@postIndividual');
    $router->get('posts', 'PostListController@postsList');
    $router->get('', 'LandingPageController@view');
    $router->get('login', 'LoginPageController@view');


?> 
