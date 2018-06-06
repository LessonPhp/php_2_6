<?php

namespace App;

abstract class Controller
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function access() : bool
    {
        // заглушка

        if(isset($_GET['ctrl']) && isset($_GET['action'])) {
            return true;
        } else {
            return false;
        }
    }

    public function action($action)
    {
        $method = 'action' . $action;
        if($this->access()) {
            return $this->$method();
        } else {
            die('Доступ закрыт');
        }
    }
}