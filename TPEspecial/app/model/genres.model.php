<?php
require_once "app/model/model.php";
class GenresModel extends Model {

    function getAll(){
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM genres');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getIdByName($genre_name){
        $db = $this->connect();
        $query = $db->prepare("SELECT id FROM genres WHERE name_gen = '$genre_name'");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getByID($id){
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM genres WHERE id = $id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function add($name_gen, $url_image){
        $db = $this->connect();
        $query = $db->prepare("INSERT INTO genres(name_gen, url_image) 
                               VALUES (?, ?)");
        $query->execute(array($name_gen, $url_image));
    }

    function delete($id) {
        $db = $this->connect();
        $query = $db->prepare("DELETE FROM genres WHERE id = $id");
        $query->execute();
    }
    
}

