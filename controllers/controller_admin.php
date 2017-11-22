<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 15.11.2017
 * Time: 12:40
 */

class Controller_admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_admin();
        $this->view = new View();
    }

    function action_index()
    {

        $data = $this->model->getAllRows($this->model->getTable());
        $this->view->generate('admin_view.php', 'template_view.php', $data);
    }


}
