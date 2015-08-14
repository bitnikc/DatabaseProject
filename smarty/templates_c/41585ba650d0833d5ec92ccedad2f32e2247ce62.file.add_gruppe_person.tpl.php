<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:37:01
         compiled from ".\\smarty\templates\add_gruppe_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5115553795ede107a6-54615374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41585ba650d0833d5ec92ccedad2f32e2247ce62' => 
    array (
      0 => '.\\\\smarty\\templates\\add_gruppe_person.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5115553795ede107a6-54615374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gp_gruppeID' => 0,
    'gp_personID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553795ede45b13_35145306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553795ede45b13_35145306')) {function content_553795ede45b13_35145306($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="gp_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="gp_gruppeID" name="gp_gruppeID" placeholder="Skriv Gruppe ID" value="<?php echo $_smarty_tpl->tpl_vars['gp_gruppeID']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="gp_personID" class="col-sm-3 control-label">Person ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="gp_personID" name="gp_personID" placeholder="Skriv Person ID" value="<?php echo $_smarty_tpl->tpl_vars['gp_personID']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="add_gruppe_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Tilbake</a>
<?php }} ?>
