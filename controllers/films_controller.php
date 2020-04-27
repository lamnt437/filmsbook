<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of films_controller
 *
 * @author lamnt
 */
require_once 'base_controller.php';

class FilmsController extends BaseController {
    //put your code here
    function __construct() {
        $this->folder = 'films';
    }
    
    public function index() {
        $title = "List of all films";
        $data = [
            'title' => $title,
        ];
        
        $this->render('index', $data);
    }
}
