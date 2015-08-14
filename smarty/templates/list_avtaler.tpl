<form action="index.php" method="POST" role="form" class="form-horizontal">
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
        {foreach $avtaler as $avtlr}
            <tr>
                <td>{$avtlr.a_tidspunkt}</td>
                <td>{$avtlr.a_avtaleType}</td>
                <td>{$avtlr.a_kommentar}</td>
                <td>{$avtlr.a_stedID}</td>
                <td>{$avtlr.g_gruppenavn}</td>
            </tr>
        {/foreach}
    </tbody>
</table>



