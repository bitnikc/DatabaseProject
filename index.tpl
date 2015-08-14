<html>
    <head>
        <title>[Databaser] Avtalebok</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="header">
            <h1>[Databaser] Avtalebok</h1>
        </div>

        <div class="col-md-8">
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
            {if $page == "main_page"}

                {include file="menu.tpl"}
                {include file="main_page.tpl"}
            {else}
                {include file="menu.tpl"}
                {include file="$page.tpl"}
            {/if}


        </div>
    </body>
</html>
