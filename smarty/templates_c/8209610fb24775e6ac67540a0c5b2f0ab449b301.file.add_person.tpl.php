<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:00:59
         compiled from ".\\smarty\templates\add_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2734355378d7ba50d31-61005040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8209610fb24775e6ac67540a0c5b2f0ab449b301' => 
    array (
      0 => '.\\\\smarty\\templates\\add_person.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2734355378d7ba50d31-61005040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p_fornavn' => 0,
    'p_etternavn' => 0,
    'p_epost' => 0,
    'p_tlfnummer' => 0,
    'p_adresse' => 0,
    'p_postnr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55378d7baa7849_18630611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378d7baa7849_18630611')) {function content_55378d7baa7849_18630611($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="p_fornavn" class="col-sm-3 control-label">Fornavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_fornavn" name="p_fornavn" placeholder="Skriv Fornavn" value="<?php echo $_smarty_tpl->tpl_vars['p_fornavn']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_etternavn" class="col-sm-3 control-label">Etternavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_etternavn" name="p_etternavn" placeholder="Skriv Etternavn" value="<?php echo $_smarty_tpl->tpl_vars['p_etternavn']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_epost" class="col-sm-3 control-label">Epost</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="p_epost" name="p_epost" placeholder="Skriv inn Epost" value="<?php echo $_smarty_tpl->tpl_vars['p_epost']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_tlfnummer" class="col-sm-3 control-label">Telefonnummer</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_tlfnummer" name="p_tlfnummer" placeholder="Skriv inn telefonnummer" value="<?php echo $_smarty_tpl->tpl_vars['p_tlfnummer']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_adresse" class="col-sm-3 control-label">Adresse</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_adresse" name="p_adresse" placeholder="Skriv adressen" value="<?php echo $_smarty_tpl->tpl_vars['p_adresse']->value;?>
">
        </div>
    </div>
    <div class="form-group">
        <label for="p_postnr" class="col-sm-3 control-label">Postnummer</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_postnr" name="p_postnr" placeholder="Skriv inn postnummer" value="<?php echo $_smarty_tpl->tpl_vars['p_postnr']->value;?>
">
        </div>
    </div>
    <input type="hidden" name="action" value="add_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to login page</a>
<?php }} ?>
