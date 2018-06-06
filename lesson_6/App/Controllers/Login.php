<?php


namespace App\Controllers;


use App\Controller;
use App\Exceptions\MultiException;
use App\Model;
use App\View;

class Login extends Controller
{
    // код с урока
    public function actionLogin()
    {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            echo 'Обрабатываем вход: ';

            $errors = new MultiException();
            $password = $_POST['password'];


            if (strlen($password) < 3) {
                $errors->add(new \Exception('Пароль слишком короткий'));
            }

            if (false !== strpos($password, '+')) {
                $errors->add(new \Exception('Пароль содержит +'));
            }

            if (!$errors->empty()) {
                throw $errors;
            }

            $this->view->display(__DIR__ . '/../../templates/login.php');
        }

    }

}