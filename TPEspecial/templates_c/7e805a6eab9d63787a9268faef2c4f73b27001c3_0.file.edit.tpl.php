<?php
/* Smarty version 4.2.1, created on 2022-10-18 04:34:21
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e10ad3880b7_46645344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e805a6eab9d63787a9268faef2c4f73b27001c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\edit.tpl',
      1 => 1666060459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e10ad3880b7_46645344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <h1>Editar <span class="badge bg-secondary">Pelicula</span></h1>
  <form method="post" action="updateMovie" enctype="multipart/form-data">
    <div class="input-group mb-2">
      <span class="input-group-text">Nombre</span>
      <input type="text" class="form-control" name="title" id="title" aria-label="Amount (to the nearest dollar)" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Año</span>
      <input type="text" class="form-control" name="year" id="year" aria-label="Amount (to the nearest dollar)" value="<?php echo $_smarty_tpl->tpl_vars['year_movie']->value;?>
" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Productor</span>
      <input type="text" class="form-control" name="producer" id="producer" aria-label="Amount (to the nearest dollar)" value="<?php echo $_smarty_tpl->tpl_vars['producer']->value;?>
" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Sinopsis</span>
      <input type="text" class="form-control" name="synopsis" id="synopsis" aria-label="Amount (to the nearest dollar)" value="<?php echo $_smarty_tpl->tpl_vars['synopsis']->value;?>
" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Duracion (min)</span>
      <input type="number" class="form-control" name="duration" id="duration" aria-label="Amount (to the nearest dollar)" value="<?php echo $_smarty_tpl->tpl_vars['duration']->value;?>
" required>
    </div>
    <style>
        .hidden{
            visibility: hidden;
            display: none;
        }
    </style>
    <input type="number" class="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" required>

    <div class="input-group mb-2">
      <input type="file" class="form-control" name="image" id="image" value="<?php echo $_smarty_tpl->tpl_vars['url_image']->value;?>
" required>
    </div>

    <div class="input-group mb-2">
      <label class="input-group-text" for="inputGroupSelect01">Genero</label>
      <select class="form-select" id="inputGroupSelect01" name="id_genre_fk">
        <option selected>Seleccionar...</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id;?>
" id="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value->name_gen;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Modificar</button>
  </form>
</div><?php }
}
