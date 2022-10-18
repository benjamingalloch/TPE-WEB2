<?php

class Model {

    function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
        return $db;
    }
    
}
