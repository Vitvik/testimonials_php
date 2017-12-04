<?php
/**
 * Created by PhpStorm.
 * User: tkachukvital
 * Date: 22.11.2017
 * Time: 15:47
 */
class Controller_authorization extends Controller
{
    function __construct()
    {
        $this->model = new Model_authorization();
        $this->view = new View();
    }

    function  action_index()
    {
        if(isset($_POST['cancel'])){
            header("Location: main");
        }
        if(isset($_POST['send'])&&isset($_POST['nick'])&& isset($_POST['password'])) {
            $result = $this->model->getUser($this->model->getTable(),$this->model->getFields(),$this->model->get_post_param());
            $username=htmlspecialchars($_POST['nick']);
            $password=htmlspecialchars($_POST['password']);
            if($username == $result['name'] && $password == $result['password'] && $result['role'] == 1){
                $_SESSION['session_username'] = $result['name'];
                $_SESSION['session_role'] = 1;
                $_SESSION['session_id_user'] = $result['id'];
                header("Location: main");
            }
            elseif($username == $result['name'] && $password == $result['password'] && $result['role'] == 0){
                $_SESSION['session_username'] = $result['name'];
                $_SESSION['session_role'] = 0;
                $_SESSION['session_id_user'] = $result['id'];
                header("Location: main");
            }
            elseif ($username != $result['name']||$password != $result['password']){
                echo "Ви ввели неправильний логін або пароль";
            }

        }

        if(isset($_POST['exit'])){
            unset($_SESSION['session_username']);
            unset($_SESSION['session_role']);
            session_destroy();
            header("Location: main");
        }
        $this->view->generate('authorization_view.php', 'block_view.php');
    }






}
