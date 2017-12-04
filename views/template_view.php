<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 10.11.2017
 * Time: 11:48
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <title>MVC + testimonials</title>
</head>
<body>
<div class="wrapper">
    <div class="content">
        <header>
            <div class="wrap clr">
                <div class="logo"><a href="#"><img src="images/logo.png" alt="logo"></a></div>
                <div class="authorization">
                    <?php if(!empty($_SESSION['session_username'])):?>
                        <form action="authorization" method="post">
                            <input class="button" type="submit" name="exit" value="Вийти">
                        </form>
                    <?php else :?>
                    <form action="authorization" method="post">
                        <input class="button" type="submit" name="send" value="Увійти">
                    </form>

                    <form action="registration" method="post" class="registration">
                        <input class="button" type="submit" name="registration" value="Зареєструватись">
                    </form>
                    <?php endif; ?>
                </div>
                <nav>
                    <ul class="clr">
                        <?php if(isset($_SESSION['session_role'])&& $_SESSION['session_role']==1):?>
                            <li ><a href="admin">Адмін панель</a></li>
                            <li ><a href="main">Головна</a></li>
                        <?php endif ?>
                    </ul>
                </nav>
            </div>
        </header>
        <div class=" wrap">
            <div id="content">
            <?php include 'views/'.$content_view;?>

            </div>

        </div>
    </div>
    <footer>
        <div class="wrap">
            <p>Автор: <a href="#">Ткачук Віталій</a> ©</p>
            <p>2017 рік</p>
        </div>
    </footer>
</div>
</body>
</html>