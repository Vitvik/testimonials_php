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

    public function getTableName(){
        return $table = 'people';
    }
    public function getFields(){
        return  $getFields = array('name', 'password', 'date');
    }

}