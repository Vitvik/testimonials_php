<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 29.11.2017
 * Time: 15:46
 */
?>
<div class="container">
    <div class="popup">
        <form action="#" method="post">
            <textarea name="message" rows="10" cols="30"><?php print $data['testimonial']?></textarea><br>
            <input type="hidden" name="form_edit_id" value="<?php  print $data['id']; ?>">
            <input class="button" type="submit" name="form_edit" value="Редагувати">
            <input class="button" type="submit" name="cancel" value="Відміна">
        </form>
    </div>
</div>