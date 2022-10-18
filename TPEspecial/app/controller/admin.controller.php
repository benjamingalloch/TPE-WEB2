<?php
require_once "app/view/admin.view.php";
require_once "app/view/edit.view.php";
require_once "app/model/movies.model.php";
require_once "app/model/genres.model.php";
class AdminController extends SecuredController{

    private $moviesModel;
    private $genresModel;

    function __construct(){
        parent::__construct();
        $this->adminView = new AdminView();
        $this->moviesModel = new MoviesModel();
        $this->genresModel = new GenresModel();
        $this->editView = new EditView();
    }

    function showForm(){
        $movies = $this->moviesModel->getAll();
        $genres = $this->genresModel->getAll();
        $this->adminView->showForm($movies, $genres);
    }

    function addMovie(){
        $title = $_POST['title'];
        $year = $_POST['year'];
        $producer = $_POST['producer'];
        $synopsis = $_POST['synopsis'];
        $duration = $_POST['duration'];
        
        $img = $_FILES['image'];
        $url = ("images/movies/".$img['name']);
        $this->saveImg($img, $url);

        $id_genre_fk = $_POST['id_genre_fk'];
        $this->moviesModel->add($title, $year, $producer, $synopsis, $duration, $url, $id_genre_fk);
        
        $this->showForm();
    }

    function addGenre(){
        $name_gen = $_POST['name_gen'];
        $img = $_FILES['image_genre'];

        $url = ("images/genres/".$img['name']);
        $this->saveImg($img, $url);

        $this->genresModel->add($name_gen, $url);

        header('location: '.ADMIN);
    }

    function deleteMovie($id){
        $intId = intval($id[0], $base = 10);
        $this->deleteMovieLOCAL($intId);
        header('location: '.ADMIN);
    }

    private function deleteMovieLOCAL($id){
        $movie = $this->moviesModel->getById($id);
        $this->deleteImg($movie->url_image);
        $this->moviesModel->delete($id);
    }

    function deleteGenre($id) {
        $intId = intval($id[0], $base = 10);

        $genre = $this->genresModel->getByID($intId);
        $this->deleteImg($genre[0]->{'url_image'});

        $movies = $this->moviesModel->getByGenreId($genre[0]->{'id'});

        foreach ($movies as $key => $movie) {
            $this->deleteMovieLOCAL($movie->id);
        }

        $this->genresModel->delete($intId);
        header('location: '.ADMIN);
    }

    function editMovie($id) {
        $intId = intval($id[0], $base = 10);
        $movie = $this->moviesModel->getById($intId);
        $genres = $this->genresModel->getAll();
        var_dump($movie);
        $this->editView->showForm($intId, $movie->title, $movie->year_movie, $movie->producer, $movie->synopsis, $movie->duration, $movie->url_image, $movie->id_genre_fk, $genres);

    }

    function updateMovie() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $year = $_POST['year'];
        $producer = $_POST['producer'];
        $synopsis = $_POST['synopsis'];
        $duration = $_POST['duration'];

        var_dump($title);
        $img = $_FILES['image'];
        $url = ("images/movies/".$img['name']);
        $this->saveImg($img, $url);

        $id_genre_fk = $_POST['id_genre_fk'];

        $this->moviesModel->update($id, $title, $year, $producer, $synopsis, $duration, $url, $id_genre_fk);
        
    }

    function saveImg($img, $destino){
        $ruta = $img['tmp_name'];
        $name = $img['name'];
        move_uploaded_file($ruta, $destino);
    }

    function deleteImg($ruta){
        unlink(print_r($ruta, true));
    }
    
}