<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 17.11.2017
 * Time: 9:08
 */

class Controller_registration extends Controller
{
    function __construct()
    {
        $this->model = new Model_registration();
        $this->view = new View();
    }

    function  action_index()
    {
       // $data = $this->model->getAllRows();
        if(isset($_POST['nick'])&& $_POST['password']===$_POST['password_confirm']) {
            $this->model->setInsert($this->model->getTable(),$this->model->getFields(), $this->model->get_post_param());
            header("Location: main");
        }
        $this->view->generate('registration_view.php', 'block_view.php');
    }






}