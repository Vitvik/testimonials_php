<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 17.11.2017
 * Time: 8:50
 */

class Model_registration extends Model
{
    private $id;
    private $name;
    private $password;
    private $nick;

    public function getTable()
    {
        return $table = 'users';
    }
    public function getFields()
    {
        return $getFields = array('name', 'password', 'date');
    }
    function get_post_param()
    {
        $nick = $_POST['nick'];
        $password = $_POST['password'];
        $nick = parent::clean($nick);
        $password = parent::clean($password);

        return $queryParam = array($nick, $password, date('Y-m-d'));
    }

    public function setInsert($table, array $getFields, array $queryParam)
    {

        $fields = implode(',', $getFields);
        $value = implode(',', array_fill(0, count($getFields), '?'));
        $sql = "INSERT INTO $table (".$fields.")VALUES(".$value.")";
        $query = $this->db->prepare($sql);
        $query->execute($queryParam);
    }

}