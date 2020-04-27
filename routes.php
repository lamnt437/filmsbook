<?php

// array of controllers
// array of actions in each controller
$controllers = [
    'home' => [
        'index',
    ],
    
    'pages' => [
        'error',
        'home'
    ],
    
    'hello' => [
        'world',
    ],
    
    'films' => [
        'index',
        'show',
        'create',
        'store',
        'edit',
        'update',
        'destroy'
    ],
];


// check if controller and action values that user passed in are valid
if(!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

// generate the path for routing
$controller_filename = 'controllers/' . $controller . '_controller.php';
// include controller class file
include_once($controller_filename);

// get controller class name
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';

// call controller action
$controller = new $klass();
$controller->$action();