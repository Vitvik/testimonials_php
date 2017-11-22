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
    public function getAllRows($db, $table){
        $results = array();
        $query = $db->prepare("SELECT * FROM $table");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    public function setInsert($db, $table, array $getFields, array $queryParam)
    {

        $fields = implode(',', $getFields);
        $value = implode(',', array_fill(0, count($getFields), '?'));
        $sql = "INSERT INTO $table (".$fields.")VALUES(".$value.")";
        $query = $db->prepare($sql);
        $query->execute($queryParam);
    }


    public function setInsertTestimonials($db, $post)
    {
        $query = $db->prepare("INSERT INTO testimonials (id_user, testimonial, date)
    VALUES(:id_user, :testimonial, :date)");
        $query->execute(array(
            "id_user" => "2",
            "testimonial" => $post['modeltestimonials'],
            "date" => date('Y-m-d H:i:s')

        ));
    }
    public function setInsertPeople($db, $new_registration)
    {
        $query = $db->prepare("INSERT INTO people (name, password, date)
    VALUES(:name, :password, :date)");
        $query->execute(array(
            "name" => $new_registration['nick'],
            "password" => $new_registration['password'],
            "date" => date('Y-m-d')

        ));
    }
public  function update(){

}
public function delete(){

}
}