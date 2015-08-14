<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 12:23:14
         compiled from ".\\smarty\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2536855378a3931a1b7-82597848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '987104d9d53b13e0257ed8bcf24381c313cf494b' => 
    array (
      0 => '.\\\\smarty\\templates\\menu.tpl',
      1 => 1429724226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2536855378a3931a1b7-82597848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55378a3931ca99_90310568',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55378a3931ca99_90310568')) {function content_55378a3931ca99_90310568($_smarty_tpl) {?><!--
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?action=main_page">Hovedsiden</a></li>
        <li><a href="index.php?action=list_person">Personer</a></li>
        <li><a href="index.php?action=list_gruppe">Grupper</a></li>
        <li><a href="index.php?action=list_avtale">Avtaler</a></li>
        <li><a href="index.php?action=list_avtaler">Gruppe Avtaler</a></li>
      </ul>
    </div>
  </div>
</nav>
-->

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">Avtalebok</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php?action=list_person">Personer</a></li>
          <li><a href="index.php?action=list_gruppe">Grupper</a></li>
          <li><a href="index.php?action=list_avtale">Avtaler</a></li>
          <li><a href="index.php?action=list_avtaler">Gruppe Avtaler</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Legg til <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="index.php?action=add_person">Ny avtale</a></li>
              <li><a href="index.php?action=add_avtale_person">Person/Avtale til gruppe</a></li>
              <li><a href="index.php?action=add_gruppe_person">Person i gruppe</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lister <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="index.php?action=list_avtaler">Avtaler etter dato</a></li>
              <li><a href="index.php?action=liste_kolliderer">Avtaler som kolliderer</a></li>
              <li><a href="index.php?action=list_gruppe">Avtaler med gruppe</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<?php }} ?>
