<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:09:47
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\adminForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd2abb55442_33660942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c536a16844aad7510e4a0eec8b16a5d6a57f5379' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\adminForm.tpl',
      1 => 1666044163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634dd2abb55442_33660942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
  <h1>Agregar <span class="badge bg-secondary">Pelicula</span></h1>
  <form method="post" action="addMovie" enctype="multipart/form-data">
    <div class="input-group mb-2">
      <span class="input-group-text">Nombre</span>
      <input type="text" class="form-control" name="title" id="title" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Año</span>
      <input type="text" class="form-control" name="year" id="year" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Productor</span>
      <input type="text" class="form-control" name="producer" id="producer" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Sinopsis</span>
      <input type="text" class="form-control" name="synopsis" id="synopsis" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Duracion (min)</span>
      <input type="number" class="form-control" name="duration" id="duration" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <input type="file" class="form-control" name="image" id="image" required>
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
    <button type="submit" class="btn btn-primary mb-3">Agregar</button>
  </form>
</div>

<div class="container">
  <form method="post" action="addGenre">
    <h1>Agregar <span class="badge bg-secondary">Genero</span></h1>

    <div class="input-group mb-2">
      <span class="input-group-text">Nombre</span>
      <input type="text" class="form-control" name="name_gen" id="name_gen" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <input type="file" class="form-control" name="image" id="image" required>
    </div>

    <button type="submit" class="btn btn-primary mb-3">Agregar</button>
  </form>
</div>

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
