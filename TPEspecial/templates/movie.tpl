<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar w/ text</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                </ul>
                <a href="../login" class="navbar-text">log in</a>
                <a href="logout" class="navbar-text">log out</a>
            </div>
        </div>
    </nav>


    <div class="card mb-3">
        <div class="container-md row g-0">
            <div class="col-md-4">
                <img src="../{$movie->url_image}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{$movie->title} ({$movie->year_movie})</h5>
                    <p class="card-text">{$movie->synopsis}</p>
                    <p class="card-text"><small class="text-muted">Genero: {$genre->name_gen} - Duración: {$movie->duration} min</small></p>
                </div>
            </div>
        </div>
    </div>

{include file="footer.tpl"}