<?php

namespace App\Controllers;


use App\Controller;
use App\Logger;

class Log extends Controller
{
    public function actionLogger()
    {
        $this->view->logger = Logger::getLog();
    }
}