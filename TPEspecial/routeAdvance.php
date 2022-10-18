<?php
require_once "config/configApp.php";
require_once "app/controller/movies.controller.php";
require_once "app/controller/login.controller.php";
require_once "app/controller/secured.controller.php";
require_once "app/controller/admin.controller.php";

function parseURL($url) {
    $urlExploded = explode('/',$url);
    $arrayReturn[configApp::$ACTION] = $urlExploded[0]; //el nuevo arreglo tiene ["ACTION"=>'home o lo que sea']
                                                              //slice crea nuevo array con los parametros
    $arrayReturn[configApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null; //y sino null
    //ahora el nuevo arreglo tiene ["ACTION" => 'home o lo que sea', "PARAMS" => [2,3,4]]
    return $arrayReturn;
}

if (isset($_GET['action'])){
    $urlData = parseURL($_GET['action']); 
    $action = $urlData[configApp::$ACTION];

    if(array_key_exists($action, configApp::$ACTIONS)) { //si la action que llega existe en el arreglo ACTIONS que tengo en configApp
        $params = $urlData[configApp::$PARAMS];
        $action = explode('#', configApp::$ACTIONS[$action]);
        
        $controller = new $action[0]();
        $metodo = $action[1]; 

        if(isset($params) && $params != null){
            $controller -> $metodo($params); //$metodo es un String que en tiempo de ejec se convierte en la funcion
        } 
        else {
            $controller ->$metodo();
        }
    }
}
