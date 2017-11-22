<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 10.11.2017
 * Time: 8:58
 */
class Controller
{
    public $model;
    public $view;
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {

    }
}