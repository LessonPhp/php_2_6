<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница админ-панели</title>
</head>
<body>
    <h3 style="text-align: center;">Админ-панель</h3>
    <a href="/lesson_6/home_work1/?ctrl=Admin&action=ViewAdd"><p style="text-align: center;">Добавить новость</p></a><br>
    <?php
    foreach ($this->articles as $article) : ?>
        <h1 style="text-align: center;"><?php echo $article->title; ?></h1>
        <p style="text-align: center;"><?php echo $article->content; ?></p>
        <a href="/lesson_6/home_work1/?ctrl=Admin&action=ViewUpdate&id=<?php echo $article->id; ?>">
            <p style="text-align: center;">Обновить новость</p></a><br>
        <a href="/lesson_6/home_work1/?ctrl=Admin&action=Delete&id=<?php echo $article->id; ?>">
            <p style="text-align: center;">Удалить новость</p></a><br>
        <?php
    endforeach;
    ?>
    <a href="/lesson_6/home_work1/?ctrl=Index&action=Index"><p style="text-align: center;">Назад на главную</p></a>
    <h3 style="text-align: center;">Значения счетчика:</h3>
    <h4 style="text-align: center;"><?php echo SebastianBergmann\Timer\Timer::resourceUsage(); ?></h4>
</body>
</html>
