<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 15.11.2017
 * Time: 12:42
 */
class Model_admin extends Model
{
    protected $table;
    public function getTable()
    {
        return $table = 'testimonials';
    }


    public function getAllRows($table){
        $results = array();
        $query = $this->db->prepare("SELECT * FROM $table");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }


}