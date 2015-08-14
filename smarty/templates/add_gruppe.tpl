<form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="g_gruppenavn" class="col-sm-3 control-label">Gruppenavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="g_gruppenavn" name="g_gruppenavn" placeholder="Skriv gruppenavn" value="{$g_gruppenavn}">
        </div>
    </div>

    <input type="hidden" name="action" value="add_gruppe" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to main page</a>
