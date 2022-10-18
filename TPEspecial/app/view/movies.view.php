<?php
require_once('libs/Smarty.class.php');
class MoviesView {

    function __construct(){
    }

    function printGenres($genres){
        $smarty = new Smarty();
        $smarty->assign('genres',$genres);
        $smarty->display('templates/home.tpl'); // muestro el template
    }

    function printMoviesByGenre($genre_name, $movies){
        $smarty = new Smarty();
        $smarty->assign('genre',$genre_name);
        $smarty->assign('movies', $movies);
        $smarty->display('templates/genreMovies.tpl'); 
    }

    function printAllMovies($movies){
        $smarty = new Smarty();
        $smarty->assign('genre',"Todas las peliculas");
        $smarty->assign('movies',$movies);
        $smarty->display('templates/allMovies.tpl'); 
    }

    function printMovie($movie, $genre){
        $smarty = new Smarty();
        $smarty->assign('movie',$movie);
        $smarty->assign('genre',$genre);
        $smarty->display('templates/movie.tpl'); 
    }

    function showError(){
        echo "<h1>Error - genero no especificado</h1>";
    }
}
