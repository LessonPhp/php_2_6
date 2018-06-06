<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость</title>
</head>
<body>
<h1 style="text-align: center;"><?php echo $this->article->title; ?></h1>
<p style="text-align: justify; text-indent: 15px;"><?php echo $this->article->content; ?></p>
<?php if (!empty($this->article->author)) { ?>
    <p style="text-align: justify; text-indent: 15px;"><?php echo $this->article->author->name; ?></p>
    <?php
} else { ?>
    <p style="text-align: justify; text-indent: 15px;">Нет автора</p>
    <?php
}
?>
<a href="/lesson_6/home_work/?ctrl=Index&action=Index">Назад на главную</a>
<h3 style="text-align: center;">Значения счетчика:</h3>
</body>
</html>