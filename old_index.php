<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 01.11.2017
 * Time: 15:19
 */
include_once 'config.php';
include_once 'AbstractClass.php';
include_once 'User.php';
include_once 'modeltestimonials.phpp';


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
        <div>
            <a href="registration.php" target="_blank">registration</a>
        </div>
        <form id="testimonial" method="post">
            <input type="text" name="testimonial" placeholder="Input testimonials">
            <input type="submit" name="send" value="Send">
        </form>
        <?php
        $test = new modeltestimonials();

        $output = $test->getAllRows($db);

        if(!empty($output)): ?>
        <table>
            <tr><td>id</td><td>id_user</td><td>testimonial</td><td>date</td></tr>
            <?php foreach($output as $key => $value): ?>
                <tr>
                    <?php foreach ($output[$key] as $value): ?>
                        <td>
                            <?php echo $value ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
             <?php endforeach; ?>
        </table>
        <?php endif;

        if(!empty($_POST['modeltestimonials'])) {
            $post = array('modeltestimonials' => $_POST['modeltestimonials']);
            $test->setInsert($db,$post);
        }











        ?>
    </div>
  </div>
</body>
</html>