<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 10.11.2017
 * Time: 8:57
 */


class Model
{
    protected $db;
    protected $table;
    function __construct()
    {
        global $dbconect;
        $this->db=$dbconect;

    }
    function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        return $value;
    }


    public function setInsert( $table, array $getFields, array $queryParam)
    {
        $fields = implode(',', $getFields);
        $value = implode(',', array_fill(0, count($getFields), '?'));
        $sql = "INSERT INTO $table (".$fields.")VALUES(".$value.")";
        $query = $this->db->prepare($sql);
        $query->execute($queryParam);
    }
    public function update($table, $message, $id){

        $query = $this->db->prepare("UPDATE $table SET `testimonial` = '$message' WHERE `id` = '$id'");
        $query->execute();

    }

    public function getAllRows($table){

        $results = array();
        $query = $this->db->prepare("SELECT * FROM $table");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function getById($table, $id){

        $results = array();
        $query = $this->db->prepare("SELECT * FROM $table WHERE `id` = $id");
        $query->execute();
        $results = $query->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

    public function delById($id){
        $query = $this->db->prepare("DELETE FROM `testimonials` WHERE `id`= $id");
        $query->execute();
    }
    public function get_data()
        {

        }
}