<html>
<head>
    <title>Nicolas Avtalebok</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <header class="container">

      <h1>Avtalebok</h1>

      {* display info text *}
      {if $page_info}
      <div class="alert alert-info" role="alert">
          <p>{$page_info}</p>
      </div>
      {/if}

      {* display errors *}
      {if $page_errors}
      <div class="alert alert-danger" role="alert">
          {foreach $page_errors as $error}
          <p>{$error}</p>
          {/foreach}
      </div>
      {/if}

      {* display page content *}
      {if $page}
          {include file="menu.tpl"}
          {include file="$page.tpl"}
      {else}
          {include file="menu.tpl"}
          {include file="main_page.tpl"}
      {/if}
    </header>

</body>
</html>
