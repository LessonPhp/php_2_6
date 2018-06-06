<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обновить новость</title>
</head>
<body>
<h3>Обновить новость</h3>
<form method="post" action="/lesson_6/home_work/?ctrl=Admin&action=Update&id=<?php echo $this->article->id; ?>">
    <input type="text" name="title" value="<?php echo $this->article->title; ?>"><br>
    <textarea name="content" style="resize: none;"><?php echo $this->article->content; ?></textarea><br>
    <input type="hidden" name="author_id" value="1">
    <button type="submit" name="update">Обновить новость</button>
    <br>
    <a href="/lesson_6/home_work/?ctrl=Admin&action=Admin">Назад в админ-панель</a>
</form>
</body>
</html>