<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 13:57:57
         compiled from ".\\smarty\templates\list_gruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:677155378cc5255682-56216660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a39bd9df930cbef9a8a15fc90f1c5d804ced64e' => 
    array (
      0 => '.\\\\smarty\\templates\\list_gruppe.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677155378cc5255682-56216660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gruppe' => 0,
    'grupp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55378cc529ed26_85454593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378cc529ed26_85454593')) {function content_55378cc529ed26_85454593($_smarty_tpl) {?><table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Gruppe ID</th>
            <th>Gruppe Navn</th>

        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['grupp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grupp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gruppe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grupp']->key => $_smarty_tpl->tpl_vars['grupp']->value) {
$_smarty_tpl->tpl_vars['grupp']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['grupp']->value['g_gruppeID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['grupp']->value['g_gruppenavn'];?>
</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?action=add_gruppe_person">Legg til Personer inn i en gruppe</a></br></br>
<a href="index.php?action=add_gruppe">Legg til ny Gruppe!</a>
<?php }} ?>
