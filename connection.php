<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DB
{
   private static $instance = NULL;
   public static function getInstance() {
       if(!isset(self::$instance)) {
           try {
               self::$instance = new PDO('mysql:host=localhost;dbname=filmsbook_db', 'root', '');
               self::$instance->exec("SET NAMES 'utf8'");
           } catch (PDOException $ex) {
               die($ex->getMessage());
           }
       }
       
       return self::$instance;
   }
}