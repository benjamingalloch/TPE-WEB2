<?php
require_once "app/model/movies.model.php";
require_once "app/model/genres.model.php";
require_once "app/view/movies.view.php";
require_once "app/controller/secured.controller.php";

class MoviesController extends Controller{

    private $moviesModel;
    private $genresModel;

    function __construct() {
        parent::__construct();
        $this->view = new MoviesView();
        $this->moviesModel = new MoviesModel();
        $this->genresModel = new GenresModel();
    }

    function showGenres(){
        $genres = $this->genresModel->getAll();
        $this->view->printGenres($genres);
        //echo password_hash('123', PASSWORD_DEFAULT);
    }

    function showMoviesByGenre($genre_name){
        $id = $this->genresModel->getIdByName($genre_name[0]);
        foreach ($id as $key => $value) {
            $movies = $this->moviesModel->getByGenreId($value->id);
        }      
        $this->view->printMoviesByGenre($genre_name[0], $movies);
    }

    function showAllMovies(){
        $movies = $this->moviesModel->getAll();
        $this->view->printAllMovies($movies);
    }

    function showMovie($title){
        $movie = $this->moviesModel->getByTitle($title[0]);
        $genre = $this->genresModel->getByID($movie->id_genre_fk);
        $this->view->printMovie($movie, $genre[0]->{'name_gen'});
    }
}

