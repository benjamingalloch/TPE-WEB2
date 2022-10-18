<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:42:34
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\allMovies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d69da597281_04342269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9906498032572954314e31b6616b8f8fc0fc665' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\allMovies.tpl',
      1 => 1666017749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d69da597281_04342269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
            <li><a href="movie/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->title;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
