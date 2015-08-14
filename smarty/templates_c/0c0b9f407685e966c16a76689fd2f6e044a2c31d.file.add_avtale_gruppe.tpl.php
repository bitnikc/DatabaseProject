<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:49:23
         compiled from ".\\smarty\templates\add_avtale_gruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18711553798d39f27d6-65801700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0b9f407685e966c16a76689fd2f6e044a2c31d' => 
    array (
      0 => '.\\\\smarty\\templates\\add_avtale_gruppe.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18711553798d39f27d6-65801700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aa_avtaleID' => 0,
    'aa_gruppeID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553798d3a2fd60_62338555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553798d3a2fd60_62338555')) {function content_553798d3a2fd60_62338555($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_avtaleID" class="col-sm-3 control-label">Avtale ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_avtaleID" name="aa_avtaleID" placeholder="Skriv Avtale ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_avtaleID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="aa_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_gruppeID" name="aa_gruppeID" placeholder="Skriv Gruppe ID" value="<?php echo $_smarty_tpl->tpl_vars['aa_gruppeID']->value;?>
">
        </div>
    </div>


    <input type="hidden" name="action" value="add_avtale_gruppe" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
