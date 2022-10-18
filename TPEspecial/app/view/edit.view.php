<?php

class EditView { 

    function __construct(){
    }

    function showForm($id, $title, $year_movie, $producer, $synopsis, $duration, $url_image, $id_genre_fk, $genres){ 
        $smarty = new Smarty();
        $smarty->assign('id', $id);
        $smarty->assign('title', $title);
        $smarty->assign('year_movie', $year_movie);
        $smarty->assign('producer', $producer);
        $smarty->assign('synopsis', $synopsis);
        $smarty->assign('duration', $duration);
        $smarty->assign('url_image', $url_image);
        $smarty->assign('id_genre_fk', $id_genre_fk);
        $smarty->assign('genres', $genres);
        $smarty->display('templates/edit.tpl'); 
    }

}