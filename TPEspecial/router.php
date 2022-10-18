<?php
require_once "config/configApp.php";
require_once "app/controller/movies.controller.php";
require_once "app/controller/login.controller.php";
require_once "app/controller/secured.controller.php";


define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');

//$action = 'home';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'home';
} 
$params = explode('/',$action);

$moviesController = new MoviesController();
$loginController = new LoginController();

switch ($params[0]){

   case 'home';
      $moviesController->showGenres();
      break;
   case 'genre';
      $moviesController->showMoviesByGenre($params[1]);
      break; 
   case 'todos';
      $moviesController->showAllMovies();
      break;
   case 'movie';
      $moviesController->showMovie($params[1]);
      break;
   case 'login';
      $loginController->login();
      break;
   default:
      echo '404 not found';
      break;
}