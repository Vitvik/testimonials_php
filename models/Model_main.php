<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 28.11.2017
 * Time: 9:59
 */
class Model_main extends Model
{
    private $id_user;
    private $testimonial;
    private $date;

    public function getTable()
    {
        return $table = 'testimonials';
    }

    public function getFields()
    {
        return $getFields = array('id_user', 'testimonial', 'date');
    }
    function get_post_param()
    {
        $message =  parent::clean($_POST['message']);

        return $queryParam = array($_SESSION['session_id_user'], $message, date('Y-m-d H:i:s'));
    }

    public function getJoinUser() {
        $results = array();
        $query = $this->db->prepare("SELECT  users.name, testimonials.testimonial, testimonials.date 
                FROM testimonials
                INNER JOIN users
                ON testimonials.id_user = users.id
                ORDER BY testimonials.id DESC LIMIT 5");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}