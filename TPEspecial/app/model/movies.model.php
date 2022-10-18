<?php
require_once "app/model/model.php";
class MoviesModel extends Model {

    
    function getByGenreId($id){
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM movies WHERE id_genre_fk = $id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getAll(){
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM movies");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getByTitle($title){
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM movies WHERE title = '$title'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getById($id) {
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM movies WHERE id = $id");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function add($title, $year, $producer, $synopsis, $duration, $url_image, $id_genre_fk) {
        $db = $this->connect();
        $query = $db->prepare("INSERT INTO movies(title, year_movie, producer, synopsis, duration, url_image, id_genre_fk) 
                               VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->execute(array($title, $year, $producer, $synopsis, $duration, $url_image, $id_genre_fk));  
    }

    function delete($id) {
        $db = $this->connect();
        $query = $db->prepare("DELETE FROM movies WHERE id = $id");
        $query->execute();
    }

    function deleteAllByGenreId($id_genre_fk){
        $db = $this->connect();
        $query = $db->prepare("DELETE FROM movies WHERE id_genre_fk = $id_genre_fk");
        $query->execute();
    }

    function editMovie() {

    }
}