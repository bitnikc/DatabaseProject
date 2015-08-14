<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:34:24
         compiled from ".\\smarty\templates\list_avtale.tpl" */ ?>
<?php /*%%SmartyHeaderCode:818155379550300b46-50846765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff117264a7bda387217a954c2a2a75e1973ea95' => 
    array (
      0 => '.\\\\smarty\\templates\\list_avtale.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '818155379550300b46-50846765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avtale' => 0,
    'avta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55379550359e40_30736004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55379550359e40_30736004')) {function content_55379550359e40_30736004($_smarty_tpl) {?><form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Søk Dato</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv dato på Avtalen du har lyst å finne" >
        </div>
    </div>
    <input type="hidden" name="action" value="list_avtale" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Søk dato</button>
    <a href="index.php?action=list_avtale" class="btn btn-primary">Reset</a>
</form>


<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>AvtaleID</th>
            <th>Tidspunkt</th>
            <th>Avtale Type</th>
            <th>Kommentar</th>
            <th>Sted ID</th>

        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['avta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['avta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['avtale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['avta']->key => $_smarty_tpl->tpl_vars['avta']->value) {
$_smarty_tpl->tpl_vars['avta']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_avtaleID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_tidspunkt'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_avtaleType'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_kommentar'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['avta']->value['a_stedID'];?>
</td>

            </tr>
        <?php } ?>
    </tbody>
</table>

<form action="index.php" method="POST" role="form" class="form-horizontal">
   
    <input type="hidden" name="action" value="list_avtale" />
    <input type="hidden" name="step" value="2" />
    <button type="submit" class="btn btn-primary">Vis kollisjoner</button>
    <a href="index.php?action=list_avtale" class="btn btn-primary">Reset</a>
</form>

<a href="index.php?action=add_avtale_person">Legg til <b>Personer</b> til en Avtale</a></br>
<a href="index.php?action=add_avtale_gruppe">Legg til <b>Grupper</b> til en Avtale</a></br></br>

<a href="index.php?action=add_avtale">Legg til ny Avtale!</a>

<?php }} ?>
