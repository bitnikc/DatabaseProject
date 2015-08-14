<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:33:38
         compiled from ".\\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1817155378a39217483-52792099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47faac1257e7442bfc23b7d8796a918d5ae29d04' => 
    array (
      0 => '.\\\\smarty\\templates\\index.tpl',
      1 => 1429706017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817155378a39217483-52792099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55378a392dba08_64134021',
  'variables' => 
  array (
    'page_info' => 0,
    'page_errors' => 0,
    'error' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378a392dba08_64134021')) {function content_55378a392dba08_64134021($_smarty_tpl) {?><html>
<head>
    <title>Nicolas Avtalebok</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Latest compiled and minified JavaScript -->
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <header class="container">

      <h1>Avtalebok</h1>

      
      <?php if ($_smarty_tpl->tpl_vars['page_info']->value) {?>
      <div class="alert alert-info" role="alert">
          <p><?php echo $_smarty_tpl->tpl_vars['page_info']->value;?>
</p>
      </div>
      <?php }?>

      
      <?php if ($_smarty_tpl->tpl_vars['page_errors']->value) {?>
      <div class="alert alert-danger" role="alert">
          <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
          <?php } ?>
      </div>
      <?php }?>

      
      <?php if ($_smarty_tpl->tpl_vars['page']->value) {?>
          <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } else { ?>
          <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("main_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php }?>
    </header>

</body>
</html>
<?php }} ?>
