<?php

namespace App\Controllers;


use App\Controller;
use App\Exceptions\Error404Exception;


class Index extends Controller
{
    public function actionIndex()
    {

        $this->view->articles = \App\Models\Article::findAll();
        $articles = \App\Models\Article::findAll();


        if (empty($articles)) {
            throw new Error404Exception('Новости не найдены');
        }

        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    public function actionArticle()
    {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
        } else {
            header('Location: /lesson_6/home_work1/?ctrl=Index&action=Index');
            die;
        }

        $this->view->article = \App\Models\Article::findById($id);

        $article = \App\Models\Article::findById($id);
        if (empty($article)) {
            throw new Error404Exception('Запрашиваемая вами новость не найдена');
        }

        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}