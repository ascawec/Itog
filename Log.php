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
<div class = "container">
    <form class = "sign" method="post">
        <h2>Login</h2>
        <input type="text" name="username" class="form-control" placeholder="username" required>
        <input type="password" name="pass" class="form-control" placeholder="password" required>
        <button class="btn btn-lg btn primary btn-block" type="submit">Login</button>
        <a href='Reg.php' class ='btn btn-lg btn primary btn-block'>Login</a>
    </form>
</div>
<?php
require ('connect.php');
    if (isset($_POST['username']) and isset($_POST['pass']))
    {
        $usName = $_POST['username'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM users where username ='$usName' and password='$pass'";
        $res = mysqli_query($connect, $query) or die (mysqli_error($connect));
        $cnt = mysqli_num_rows($res);
            if ($cnt == 1)
            {
                $_SESSION['username'] = $usName;
                            }
            else
            {
                $msg = "Error";
            }
    }
    if (isset($_SESSION['username']))
    {
        $usName = $_SESSION['username'];
        echo "a href = 'Load.php?user=$usName'>";
        echo "<meta http-equiv=\"refresh\" content=\"0; url=Load.php\">";
    }
     ?>
</body>
</html>
