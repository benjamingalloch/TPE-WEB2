<?php
require_once "app/model/users.model.php";
require_once "app/view/login.view.php";
require_once "app/controller/controller.php";

class LoginController extends Controller{

    private $view;
    private $model;

    function __construct() {
        $this->view = new LoginView();
        $this->model = new UsersModel();
        $this->moviesView = new MoviesView();  
    }

    function login(){
        $this->view->showLogin();
        //echo password_hash('123', PASSWORD_DEFAULT);
    }

    function verifyLogin() {
        $userName = $_POST['userId'];
        $pass = $_POST['passworId'];
        if(!empty($userName) && !empty($pass)){

            $dbUser = $this->model->getUser($userName);

            if(isset($dbUser[0]['pass'])){

                if(password_verify($pass, $dbUser[0]['pass'])){ //uso el primero que coincide. Hay que impedir que se pueda registrar un usuario ya existente 
                    session_start();
                    $_SESSION['USER'] = $userName;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    if($userName == "admin" && $pass == "123"){
                        header('Location: '.ADMIN);
                    } else {
                        header('Location: '.HOME);
                    }
                    
                    
                    die();
                } 
                else {
                    $this->view->showLogin("Usuario o Contraseña incorrectos");
                }
            } 
            else {
                //no existe el usuario
            }
        }
    }

    public function destroy(){
        session_start();
        session_destroy();
        header('Location: '.LOGIN);
        die();
    }
}