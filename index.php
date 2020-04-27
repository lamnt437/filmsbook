<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('connection.php');

/* if user passes in a controller, get that value */
/* else go $controller = home, action = index
/* if that value doesn't correspond to a controller => routes.php will handle this exception */
if(isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }
} else {
    $controller = 'home';
    $action = 'index';
}

require_once('routes.php');