<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 15.11.2017
 * Time: 12:42
 */
?>
<h1>Admin panel</h1>
<H2>All testimonials</H2>
<?php if(!empty($data)): ?>

    <table>
        <tr><td>ID</td><td>Name</td><td>Testimonial</td><td>Date</td><td>Edit</td><td>Delete</td></tr>
        <?php foreach($data as $key => $value): ?>
            <?php $id = $value['id']; ?>
            <tr>
                <?php foreach ($data[$key] as $value): ?>
                    <td>
                        <?php echo $value ?>
                    </td>
                <?php endforeach; ?>
                    <td>
                        <form action="#" method="post">
                            <input type="hidden" name="edit_id" value="<?php  print $id; ?>">
                            <input class="button" type="submit" name="edit" value="Редагувати">
                        </form>
                    </td>
                    <td>
                        <form action="#" method="post">
                            <input type="hidden" name="del_id" value="<?php  print $id; ?>">
                            <input class="button" type="submit" name="del" value="Видалити">
                        </form>
                    </td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php endif; ?>
