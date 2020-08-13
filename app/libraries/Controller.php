<?php

/* 
 * Base Controllers
 * Loads the models and views
 * 
*/

class Controller
{
    public function model($model)
    {
        require_once('../app/model/' . $model . '.php');

        return new $model();
    }

    //Load view
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            //View does not exist
            die('View does not exist');
        }
    }
}
