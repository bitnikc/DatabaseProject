<!--
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
