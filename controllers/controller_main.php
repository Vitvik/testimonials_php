<?php

class Controller_main extends Controller
{

    function __construct()
    {
        $this->model = new Model_main();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->getJoinUser();

        if(isset($_POST['message'])&& isset($_POST['user_testimonial'])) {
            $this->model->setInsert($this->model->getTable(), $this->model->getFields(), $this->model->get_post_param());
            header("Location: main");
        }
        if(isset($_GET['id'])){
            var_dump($_GET['id']);
        }
            $this->view->generate('main_view.php', 'template_view.php', $data);
    }
}