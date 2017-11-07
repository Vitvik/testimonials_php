<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 01.11.2017
 * Time: 15:14
 */

class Testimonial extends AbstractClass
{

    private $id;
    private $id_user;
    private $testimonial;
    private $date;
    //private $post;

public function getOutput(){
    echo "Now I Aam in class Testimonials";
}
public function setInsert($db, $post)
{
    $query = $db->prepare("INSERT INTO testimonials (id_user, testimonial, date)
    VALUES(:id_user, :testemonial, :date)");
    $query->execute(array(
        "id_user" => "2",
        "testemonial" => $post['testimonial'],
        "date" => date('Y-m-d H:i:s')

    ));
}
public function getAllRows($db){
    $results = array();
    $query = $db->prepare("SELECT * FROM `testimonials`");
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

}
