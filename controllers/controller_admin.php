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
        $data = $this->model->getJoinUser();
        if(isset($_SESSION['session_role'])&& $_SESSION['session_role']==1) {
            $this->view->generate('admin_view.php', 'template_view.php', $data);
        }

        else header("Location: main");


        if (isset($_POST['del'])) {
            $id = $_POST['del_id'];
            $this->model->delById($id);
            header_remove();
            header("Location: admin");
        }

        if (isset($_POST['edit'])) {
            $id = $_POST['edit_id'];
            $data = $this->model->getById($this->model->getTable(), $id);
            $this->view->generate('form_view.php', 'block_view.php', $data);

        }

        if(isset($_POST['form_edit'])){
            $message = $this->model->clean($_POST['message']);
            $id = $this->model->clean($_POST['form_edit_id']);
            $this->model->update($this->model->getTable(), $message, $id);
            header_remove();
            header("Refresh: admin");
        }



    }

}
