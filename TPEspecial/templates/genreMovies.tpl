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


    <h1>{$genre}</h1>
    <div class="container-md d-flex flex-row flex-wrap">
        {foreach from=$movies item=pelicula}
            <div class="card text-bg-dark mb-3" style="width: 18rem;">
                <img src="../{$pelicula->url_image}" class="card-img-top" alt="portada">
                <div class="card-body">
                    <h5 class="card-title .text-white"><a href="../movie/{$pelicula->title}">{$pelicula->title}</a></h5>
                </div>
            </div> 
        {/foreach}
    </div>

{include file="footer.tpl"}