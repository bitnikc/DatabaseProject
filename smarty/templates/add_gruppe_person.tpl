<form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="gp_gruppeID" class="col-sm-3 control-label">Gruppe ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="gp_gruppeID" name="gp_gruppeID" placeholder="Skriv Gruppe ID" value="{$gp_gruppeID}">
        </div>
    </div>
    <div class="form-group">
        <label for="gp_personID" class="col-sm-3 control-label">Person ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="gp_personID" name="gp_personID" placeholder="Skriv Person ID" value="{$gp_personID}">
        </div>
    </div>
    <input type="hidden" name="action" value="add_gruppe_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Tilbake</a>
