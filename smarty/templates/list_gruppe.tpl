<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Gruppe ID</th>
            <th>Gruppe Navn</th>

        </tr>
    </thead>
    <tbody>
        {foreach $gruppe as $grupp}
            <tr>
                <td>{$grupp.g_gruppeID}</td>
                <td>{$grupp.g_gruppenavn}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
<a href="index.php?action=add_gruppe_person">Legg til Personer inn i en gruppe</a></br></br>
<a href="index.php?action=add_gruppe">Legg til ny Gruppe!</a>
