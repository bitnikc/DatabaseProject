<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:37:04
         compiled from ".\\smarty\templates\add_avtale_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11288553795f017d2a3-99986496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc36bd77c532340784507bc8e209662029dc8834' => 
    array (
      0 => '.\\\\smarty\\templates\\add_avtale_person.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11288553795f017d2a3-99986496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aa_avtaleID' => 0,
    'aa_personID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553795f01b53c9_63549899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553795f01b53c9_63549899')) {function content_553795f01b53c9_63549899($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_avtaleID" class="col-sm-3 control-label">Avtale ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_avtaleID" name="aa_avtaleID" placeholder="Skriv Avtale ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_avtaleID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="aa_personID" class="col-sm-3 control-label">Person ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_personID" name="aa_personID" placeholder="Skriv Person ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_personID']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="add_avtale_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
