<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:23:13
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd5d119e609_52832864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032813ff689e17ba8ca2e80d603bd8d401fc9e0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\admin\\admin.tpl',
      1 => 1666045374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:genresForm.tpl' => 1,
    'file:moviesForm.tpl' => 1,
  ),
),false)) {
function content_634dd5d119e609_52832864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:genresForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:moviesForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <div class="accordion">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id;?>
">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
" aria-expanded="true" aria-controls="<?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
">
            <?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>

          </button>
        </h2>
        <div id="<?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
" class="accordion-collapse collapse" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id;?>
" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ul class="list-group">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['movie']->value->id_genre_fk == $_smarty_tpl->tpl_vars['genre']->value->id) {?>
                  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>
</li>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php }
}
