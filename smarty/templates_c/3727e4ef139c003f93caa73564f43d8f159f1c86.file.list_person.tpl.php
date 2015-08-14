<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 13:57:53
         compiled from ".\\smarty\templates\list_person.tpl" */ ?>
<?php /*%%SmartyHeaderCode:995455378cc1174e09-94384206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3727e4ef139c003f93caa73564f43d8f159f1c86' => 
    array (
      0 => '.\\\\smarty\\templates\\list_person.tpl',
      1 => 1429702229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995455378cc1174e09-94384206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'person' => 0,
    'pers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55378cc11d9fb3_91710004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378cc11d9fb3_91710004')) {function content_55378cc11d9fb3_91710004($_smarty_tpl) {?><table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Person ID</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Telefon Nummer</th>
            <th>Epost</th>
            <th>Adresse</th>
            <th>Post Nummer</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['pers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pers']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['person']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pers']->key => $_smarty_tpl->tpl_vars['pers']->value) {
$_smarty_tpl->tpl_vars['pers']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_personID'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_fornavn'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_etternavn'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_tlfnummer'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_epost'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_adresse'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['pers']->value['p_postnr'];?>
</td>             
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="index.php?action=add_person">Legg til ny Person!</a><?php }} ?>
