<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:00:56
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\movie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc28829a877_92491463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec7834c9c89947078c43408cfcd05ca093f6556d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\movie.tpl',
      1 => 1666038047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dc28829a877_92491463 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                <img src="../<?php echo $_smarty_tpl->tpl_vars['movie']->value->url_image;?>
" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>
 (<?php echo $_smarty_tpl->tpl_vars['movie']->value->year_movie;?>
)</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['movie']->value->synopsis;?>
</p>
                    <p class="card-text"><small class="text-muted">Genero: <?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
 - Duración: <?php echo $_smarty_tpl->tpl_vars['movie']->value->duration;?>
 min</small></p>
                </div>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
