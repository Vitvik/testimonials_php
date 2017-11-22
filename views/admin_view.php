<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 15.11.2017
 * Time: 12:42
 */
?>
<h1>Admin panel</h1>
<p>All testimonials</p>
<?php if(!empty($data)): ?>
    <table>
        <tr><td>id</td><td>id_user</td><td>testimonial</td><td>date</td></tr>
        <?php foreach($data as $key => $value): ?>
            <tr>
                <?php foreach ($data[$key] as $value): ?>
                    <td>
                        <?php echo $value ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
