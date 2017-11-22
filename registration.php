
<?php

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
        /*
        if(!empty($_POST['nick'])&& $_POST['password'] === $_POST['password_confirm']){
            $new_registration = array('nick' => $_POST['nick'], 'password' => $_POST['password']);
            $new_user = new User();
            $new_user ->setInsert($db, $new_registration);
            header("Location: old_index.php");
        }
        */

        $queryParam = array('testInsertNick2', 'testInsertPassword2',date('Y-m-d'));

       // $new_user = new User();

       // $new_user ->setInsert($db, $new_user ->getTableName(), $new_user ->getFields(), $queryParam);

        echo "Jast HI";



    ?>
    </div>
</div>
</body>
</html>