<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 22.11.2017
 * Time: 15:49
 */
class Model_authorization extends Model
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
        return $getFields = array('name');
    }

    function get_post_param()
    {
        $nick = $_POST['nick'];
        $password = $_POST['password'];
        $nick = parent::clean($nick);
        $password = parent::clean($password);

        return $queryParam = array($nick);
    }

    public function getUser($table, array $getFields, array $queryParam)
    {

        $fields = implode(',', $getFields);
        $value = implode(',', array_fill(0, count($getFields), '?'));
        $sql = "SELECT * FROM $table WHERE (".$fields.")=(".$value.")";
        $query = $this->db->prepare($sql);
        $query->execute($queryParam);
        $results = $query->fetch(PDO::FETCH_ASSOC);
        return $results;
    }

}