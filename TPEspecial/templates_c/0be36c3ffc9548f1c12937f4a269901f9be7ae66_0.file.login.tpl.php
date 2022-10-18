<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:45:05
  from 'C:\xampp\htdocs\Ejercicios\TPEspecial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6a715603a3_43947581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0be36c3ffc9548f1c12937f4a269901f9be7ae66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ejercicios\\TPEspecial\\templates\\login.tpl',
      1 => 1666017838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d6a715603a3_43947581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <form method="post" action="verifyLogin">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="input" class="form-control" name="userId" id="userId" aria-describedby="userId">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="passworId" id="passworId" placeholder="Password">
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
