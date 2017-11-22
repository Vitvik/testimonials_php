<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 13.11.2017
 * Time: 20:13
 */
class Controller_testimonials extends Controller
{

    function __construct()
   {
        $this->model = new Model_testimonials();
        $this->view = new View();
   }


    function  action_index()
    {
        $data = $this->model->getAllRows($this->model->getTable());

        $this->view->generate('testimonials_view.php', 'template_view.php', $data);
    }
}