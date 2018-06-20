<?php

use App\Exceptions\DbException;
use App\Exceptions\Error404Exception;
use App\Logger;

require __DIR__ . '/autoload.php';


$ctrl = $_GET['ctrl'] ? $_GET['ctrl'] : 'Index';
$action = $_GET['action'] ? $_GET['action'] : 'Index';

try {
    $class = '\App\Controllers\\' . $ctrl;
    $controller = new $class;
    $controller->action($action);
} catch (DbException $ex) {
    $ctrl = new \App\Controllers\Error();
    $ctrl->action('DbError');
} catch (Error404Exception $ex) {
    $ctrl = new \App\Controllers\Error();
    $ctrl->action('NotFound404');
} finally {
    if (isset($ex)) {
        $getLog = Logger::getLog($ex);
    }
}

