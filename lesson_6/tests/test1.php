<?php

require __DIR__. '/../autoload.php';


use App\Db;
$db = new Db();


// insert

// вариант 1 с использованием insert()

$article = new \App\Models\Article();

$article->title = 'Новость 8';
$article->content = 'There are many variations of passages of Lorem Ipsum available,
                     but the majority have suffered alteration in some form, by injected humour,
                     or randomised words which don\'t look even slightly believable. If you are going
                     to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing
                     hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                     predefined chunks as necessary, making this the first true generator on the Internet.';

$article->insert();
var_dump($article);


// вариант 2 с использованием save()

/*
$article = new \App\Models\Article();

$article->title = 'Новость 8';
$article->content = 'There are many variations of passages of Lorem Ipsum available,
                     but the majority have suffered alteration in some form, by injected humour,
                     or randomised words which don\'t look even slightly believable. If you are going
                     to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing
                     hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                     predefined chunks as necessary, making this the first true generator on the Internet.';

$article->save();
var_dump($article);
*/