<?php

namespace App\Controllers;


use App\Controller;
use App\Logger;

// задание 5
class Log extends Controller
{
    public function actionLogger()
    {
        $this->view->logger = Logger::getLog();
    }
}