<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:00:07
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dde7734b960_73221863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08d8ec91e9fb4380a8520884521990635727b557' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\home.tpl',
      1 => 1666047599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dde7734b960_73221863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-md d-flex flex-row flex-wrap">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
            <div class="card text-bg-dark mb-3" style="width: 18rem;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['genre']->value->url_image;?>
" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
</h5>
                    <a href="genre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
" class="btn btn-primary">Ver</a>
                </div>
            </div> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="card text-bg-dark mb-3" style="width: 18rem;">
                <img src="images/genres/todos_card.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Todos</h5>
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['genre']->value->description;?>
</p>
                    <a href="todos" class="btn btn-primary">Ir</a>
                </div>
            </div>
    </div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
