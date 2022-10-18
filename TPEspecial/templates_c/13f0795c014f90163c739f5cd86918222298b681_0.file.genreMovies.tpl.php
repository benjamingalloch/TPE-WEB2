<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:19:22
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\genreMovies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634daaba3bcfb2_33439065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13f0795c014f90163c739f5cd86918222298b681' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\genreMovies.tpl',
      1 => 1666034256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634daaba3bcfb2_33439065 (Smarty_Internal_Template $_smarty_tpl) {
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


    <h1><?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
</h1>
    <div class="container-md d-flex flex-row flex-wrap">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
            <div class="card text-bg-dark mb-3" style="width: 18rem;">
                <img src="../<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->url_image;?>
" class="card-img-top" alt="portada">
                <div class="card-body">
                    <h5 class="card-title .text-white"><a href="../movie/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->title;?>
</a></h5>
                </div>
            </div> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
