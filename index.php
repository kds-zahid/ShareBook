<?php
    include 'classes/login.php';
    $objLogin=new Login();
    if(isset($_SESSION['sb_id'])){
        header("location:home.php");
    }
    if(isset($_POST['login'])){
        //print_r($_POST);
        $objLogin->selectData($_POST);
    }
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="assets/frontend/css/style.css" />
    </head>
    <body class='loginBg'>
    <center>
        <h3>Login your account</h3>
        <form action="" method='post'>
            <label for="email">Email</label>
            <br />
            <input id="email" name="email" type="email" required />
            <label for="password">password</label>
            <br />
            <input type="password" name="password" id="password" />
            <br />
            <button type="submit" name="login" value='login'>Login</button>
        </form>
    </center>
</body>
</html>