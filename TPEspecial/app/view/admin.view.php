<?php

class AdminView { 

    function __construct(){
    }

    function showForm($movies, $genres){ 
        $smarty = new Smarty();
        $smarty->assign('movies', $movies);
        $smarty->assign('genres', $genres);
        $smarty->display('templates/admin.tpl'); 
    }

}