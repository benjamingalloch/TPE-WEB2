<?php
/* Smarty version 4.2.1, created on 2022-10-13 15:21:59
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\genre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634810f78e3a37_64665197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f871c6de7de48f2c0e50bcec2f69b7ffcef523' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\genre.tpl',
      1 => 1665667301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634810f78e3a37_64665197 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
            <li><a href="../movie/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->title;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </ul>

</body>
</html><?php }
}
