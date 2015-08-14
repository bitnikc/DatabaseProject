<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:15:39
         compiled from ".\\smarty\templates\add_avtale.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15452553790eb942e99-81285205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '247668689991fd2e87ee58ad8615496ec2088dd5' => 
    array (
      0 => '.\\\\smarty\\templates\\add_avtale.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15452553790eb942e99-81285205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a_tidspunkt' => 0,
    'a_avtaleType' => 0,
    'a_kommentar' => 0,
    'a_stedID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553790eb984172_44371559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553790eb984172_44371559')) {function content_553790eb984172_44371559($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Tidspunkt</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv Tidspunktet på Avtalen" value="<?php echo $_smarty_tpl->tpl_vars['a_tidspunkt']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="a_avtaleType" class="col-sm-3 control-label">Avtale Type</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_avtaleType" name="a_avtaleType" placeholder="Skriv Avtale-typen" value="<?php echo $_smarty_tpl->tpl_vars['a_avtaleType']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="a_kommentar" class="col-sm-3 control-label">Kommentar</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_kommentar" name="a_kommentar" placeholder="Skriv Kommentar" value="<?php echo $_smarty_tpl->tpl_vars['a_kommentar']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="a_stedID" class="col-sm-3 control-label">Sted ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_stedID" name="a_stedID" placeholder="Skriv Sted ID" value="<?php echo $_smarty_tpl->tpl_vars['a_stedID']->value;?>
">
        </div>
    </div>

    <input type="hidden" name="action" value="add_avtale" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
<?php }} ?>
