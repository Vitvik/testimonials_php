<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 01.11.2017
 * Time: 13:18
 */


abstract class AbstractClass
{




public function getOneRow(){

}
    public function setInsert($db, $post)
    {
        $statement = $db->prepare("INSERT INTO testimonials (id_user, testimonial, date)
    VALUES(:id_user, :testemonial, :date)");

    }
public  function update(){

}
public function delete(){

}
}