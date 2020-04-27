<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of base_controller
 *
 * @author lamnt
 */
class BaseController {
    protected $folder;
    
    function render($file, $data = array()) {
        $view_file = 'views/' . $this->folder . '/' . $file . '.php';
        if(is_file($view_file)) {
            extract($data);
            
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            
            require_once('views/layouts/application.php');
        } else {
            header('Location: index.php?controller=pages&action=error');
        }
    }
}
