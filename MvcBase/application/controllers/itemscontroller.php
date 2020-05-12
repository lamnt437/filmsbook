<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of itemscontroller
 *
 * @author lamnt
 */
class ItemsController extends Controller {

    function view($id = null, $name = null) {

        $this->set('title', $name . ' - My Todo List App');
        $this->set('todo', $this->Item->select($id));
    }

    function viewall() {

        $this->set('title', 'All Items - My Todo List App');
        $this->set('todo', $this->Item->selectAll());
    }

    function add() {
        $todo = $_POST['todo'];
        $this->set('title', 'Success - My Todo List App');
        $this->set('todo', $this->Item->query('insert into items (item_name) values(\'' . mysqli_real_escape_string($todo) . '\')'));
    }

    function delete($id = null) {
        $this->set('title', 'Success - My Todo List App');
        $this->set('todo', $this->Item->query('delete from items where id = \'' . mysqli_real_escape_string($id) . '\''));
    }

}
