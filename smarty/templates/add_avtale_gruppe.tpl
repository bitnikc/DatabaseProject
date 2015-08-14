<form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="aa_avtaleID" class="col-sm-3 control-label">Avtale ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_avtaleID" name="aa_avtaleID" placeholder="Skriv Avtale ID" value="{$aa_avtaleID}">
        </div>
    </div>
    <div class="form-group">
        <label for="aa_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="aa_gruppeID" name="aa_gruppeID" placeholder="Skriv Gruppe ID" value="{$aa_gruppeID}">
        </div>
    </div>


    <input type="hidden" name="action" value="add_avtale_gruppe" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
