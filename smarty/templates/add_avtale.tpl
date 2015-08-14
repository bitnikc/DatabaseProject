<form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="a_tidspunkt" class="col-sm-3 control-label">Tidspunkt</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_tidspunkt" name="a_tidspunkt" placeholder="Skriv Tidspunktet på Avtalen" value="{$a_tidspunkt}">
        </div>
    </div>
    <div class="form-group">
        <label for="a_avtaleType" class="col-sm-3 control-label">Avtale Type</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_avtaleType" name="a_avtaleType" placeholder="Skriv Avtale-typen" value="{$a_avtaleType}">
        </div>
    </div>
    <div class="form-group">
        <label for="a_kommentar" class="col-sm-3 control-label">Kommentar</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_kommentar" name="a_kommentar" placeholder="Skriv Kommentar" value="{$a_kommentar}">
        </div>
    </div>
    <div class="form-group">
        <label for="a_stedID" class="col-sm-3 control-label">Sted ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="a_stedID" name="a_stedID" placeholder="Skriv Sted ID" value="{$a_stedID}">
        </div>
    </div>

    <input type="hidden" name="action" value="add_avtale" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
