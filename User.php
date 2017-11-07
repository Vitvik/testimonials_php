<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 01.11.2017
 * Time: 15:09
 */

class User extends AbstractClass
{
    private $id;
    private $name;
    private $password;
    private $date;
    private $role;

    public function setInsert($db, $new_registration)
    {
        $query = $db->prepare("INSERT INTO people (name, password, date)
    VALUES(:name, :password, :date)");
        $query->execute(array(
            "name" => $new_registration['nick'],
            "password" => $new_registration['password'],
            "date" => date('Y-m-d')

        ));
    }
}