<?php

class ConfigApp {
    
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        'home' => 'moviesController#showGenres',
        'genre' => 'moviesController#showMoviesByGenre',
        'todos' => 'moviesController#showAllMovies',
        'movie' => 'moviesController#showMovie',
        'login' => 'loginController#login',
        'verifyLogin' => 'loginController#verifyLogin',
        'logout' => 'loginController#destroy',
        'admin' => 'adminController#showForm',
        'addMovie' => 'adminController#addMovie',
        'addGenre' => 'adminController#addGenre',
        'deleteMovie' => 'adminController#deleteMovie',
        'deleteGenre' => 'adminController#deleteGenre',
        'editMovie' => 'adminController#editMovie'
    ];


}

?>