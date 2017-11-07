
<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 07.11.2017
 * Time: 17:33
 */
include_once 'config.php';
include_once 'AbstractClass.php';
include_once 'User.php';
include_once 'Testimonial.php';


$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="#" />
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <form id="registration" method="post">
            <input type="text" name="nick" placeholder="NickName">
            <input type="password" name="password" placeholder="Input password">
            <input type="password" name="password_confirm" placeholder="Confirm password">
            <input type="submit" name="send" value="Send">
        </form>
    <?php

        if(!empty($_POST['nick'])&& $_POST['password'] === $_POST['password_confirm']){
            $new_registration = array('nick' => $_POST['nick'], 'password' => $_POST['password']);
            $new_user = new User();
            $new_user ->setInsert($db, $new_registration);
            header("Location: index.php");
        }




    ?>
    </div>
</div>
</body>
</html>