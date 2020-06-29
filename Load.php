<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$img = $_FILES['Фото'];
$Upload = 'Загрузка';
$date = Date('d.m.Y.H.i.s.u');
if ($img)
    {
        $img_name = $img['Имя'];
        $date = $_SESSION['UsName'].$date.$img_name;
        $tmp_name = $img['t_name'];
        if (!move_uploaded_file($tmp_name, $Upload . DIRECTORY_SEPARATOR. $date))
        {
            echo  "Файл не загружен, повторите ещё раз";
        }
    }
?>
<div class = "container">
    <form class = "sign" method="post">
        <h2>Download Photo</h2>
        <a href='me.php' class ='btn btn-lg btn primary btn-block'>Мои фотографии</a>
        <a href='photo.php' class ='btn btn-lg btn primary btn-block'>Все фотографии</a>
        <a href='Load.php' class ='btn btn-lg btn primary btn-block'>Загрузить фотографии</a>
        <a href='Out.php' class ='btn btn-lg btn primary btn-block'>Выход</a>
        <input type="file" name="image" value="">
        <button class="btn btn-lg btn primary btn-block" type="submit">Загрузить</button>
    </form>
</div>

</body>
</html>

