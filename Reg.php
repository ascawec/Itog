<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
require ('connect.php');
    if (isset($_POST['username']) && isset($_POST['pass']))
    {
        $usName = $_POST['username'];
        $pass = $_POST['pass'];
        $query = "INSERT INTO users (username, pass) VALUES ('$usName', '$pass')";
        $res = mysqli_query($connect, $query);

        if ($res)
        {
            $msg = "Registration is complete";
        }
        else
        {
            $sms = "Error";
        }
    }
    ?>

<div class = "container">
    <form class = "sign" method="post">
        <h2>Reg</h2>
        <?php if (isset($msg)){?><div class = "alert alert-success" role = "alert"><?php echo $msg;?></div><?php}?>
        <?php if (isset($sms)){?><div class = "alert alert-success" role = "alert"><?php echo $sms;?></div><?php}?>
        <input type="text" name="username" class="form-control" placeholder="username" required>
        <input type="password" name="pass" class="form-control" placeholder="password" required>
        <button class="btn btn-lg btn primary btn-block" type="submit">Login</button>
        <a href='Log.php' class ='btn btn-lg btn primary btn-block'>Login</a>
    </form>
</div>

</body>
</html>