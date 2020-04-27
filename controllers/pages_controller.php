<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages_controller
 *
 * @author lamnt
 */
require_once('controllers/base_controller.php');

class PagesController extends BaseController {
    //put your code here
    function __construct() {
        $this->folder = 'pages';
    }
    
    public function error() {
        echo "Hello, this is the Error page!";
    }
    
    public function home() {
        $data = [
          'foo' => 'bar',
          'hello' => 'world',
        ];
        
        $this->render('home', $data);
    }
}
