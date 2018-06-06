<?php

namespace App\Controllers;


use App\Controller;
use App\Exceptions\Error404Exception;
use App\View;
use SebastianBergmann\Timer\Timer;

class Index extends Controller
{
    public function actionIndex()
    {
        // Счетчик времени и памяти для страниц сайта: phpunit/php-timer

        Timer::start();

        $this->view->articles = \App\Models\Article::findAll();
        $articles = \App\Models\Article::findAll();

        if (empty($articles)) {
            throw new Error404Exception('Новости не найдены');
        }

        $this->view->articles = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');

        $time = Timer::stop();
        print Timer::resourceUsage();
    }

    public function actionArticle()
    {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
        } else {
            header('Location: /lesson_6/home_work/?ctrl=Index&action=Index');
            die;
        }

        // Счетчик времени и памяти для страниц сайта: phpunit/php-timer

        Timer::start();
        $article = \App\Models\Article::findById($id);
        if (empty($article)) {
            throw new Error404Exception('Запрашиваемая вами новость не найдена');
        }
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../../templates/article.php');

        $time = Timer::stop();
        print Timer::resourceUsage();
    }
}