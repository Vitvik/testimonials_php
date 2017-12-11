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
    public function getFields()
    {
        return $getFields = array('testimonial', 'id');
    }

    public function getJoinUser()
    {
        $results = array();
        $query = $this->db->prepare("SELECT testimonials.id, users.name, testimonials.testimonial, testimonials.date 
                FROM testimonials
                INNER JOIN users
                ON testimonials.id_user = users.id");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }



}