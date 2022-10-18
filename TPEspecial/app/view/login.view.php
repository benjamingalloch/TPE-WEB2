<?php
require_once('libs/Smarty.class.php');
class LoginView{

    function __construct(){
    }

    function showLogin($message = ''){ //para poder llamar un metodo con y sin parametro le damos un valor default
        $smarty = new Smarty();
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); 
    }

}