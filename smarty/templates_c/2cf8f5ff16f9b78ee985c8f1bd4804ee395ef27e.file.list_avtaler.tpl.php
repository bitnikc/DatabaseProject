<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 13:58:09
         compiled from ".\\smarty\templates\list_avtaler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3204855378cd18b2552-04270398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf8f5ff16f9b78ee985c8f1bd4804ee395ef27e' => 
    array (
      0 => '.\\\\smarty\\templates\\list_avtaler.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3204855378cd18b2552-04270398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avtaler' => 0,
    'avtlr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55378cd1916940_69926748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378cd1916940_69926748')) {function content_55378cd1916940_69926748($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_gruppeID" name="aa_gruppeID" placeholder="Skriv gruppe ID for å finne avtalene deres" >
        </div>
    </div>
    <input type="hidden" name="action" value="list_avtaler" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Søk Avtaler</button>
    <a href="index.php?action=list_avtaler" class="btn btn-primary">Reset</a>
</form>


<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Tidspunkt</th>
            <th>Avtale Type</th>
            <th>Kommentar</th>
            <th>Sted ID</th>
            <th>Gruppe Navn</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['avtlr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['avtlr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avtaler']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['avtlr']->key => $_smarty_tpl->tpl_vars['avtlr']->value) {
$_smarty_tpl->tpl_vars['avtlr']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_tidspunkt'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_avtaleType'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_kommentar'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['a_stedID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avtlr']->value['g_gruppenavn'];?>
</td>
            </tr>
        <?php } ?>
    </tbody>
</table>



<?php }} ?>
