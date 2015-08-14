<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:36:46
         compiled from ".\\smarty\templates\add_gruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29066553795de33bcc7-40422046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f022afa059d9400e4e9049a589cb4dce1a8207' => 
    array (
      0 => '.\\\\smarty\\templates\\add_gruppe.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29066553795de33bcc7-40422046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'g_gruppenavn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553795de369fc3_49457141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553795de369fc3_49457141')) {function content_553795de369fc3_49457141($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="g_gruppenavn" class="col-sm-3 control-label">Gruppenavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="g_gruppenavn" name="g_gruppenavn" placeholder="Skriv gruppenavn" value="<?php echo $_smarty_tpl->tpl_vars['g_gruppenavn']->value;?>
">
        </div>
    </div>

    <input type="hidden" name="action" value="add_gruppe" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
