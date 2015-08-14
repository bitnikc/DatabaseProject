<form action="index.php" method="POST" role="form" class="form-horizontal">
    <div class="form-group">
        <label for="p_fornavn" class="col-sm-3 control-label">Fornavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_fornavn" name="p_fornavn" placeholder="Skriv Fornavn" value="{$p_fornavn}">
        </div>
    </div>
    <div class="form-group">
        <label for="p_etternavn" class="col-sm-3 control-label">Etternavn</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_etternavn" name="p_etternavn" placeholder="Skriv Etternavn" value="{$p_etternavn}">
        </div>
    </div>
    <div class="form-group">
        <label for="p_epost" class="col-sm-3 control-label">Epost</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" id="p_epost" name="p_epost" placeholder="Skriv inn Epost" value="{$p_epost}">
        </div>
    </div>
    <div class="form-group">
        <label for="p_tlfnummer" class="col-sm-3 control-label">Telefonnummer</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_tlfnummer" name="p_tlfnummer" placeholder="Skriv inn telefonnummer" value="{$p_tlfnummer}">
        </div>
    </div>
    <div class="form-group">
        <label for="p_adresse" class="col-sm-3 control-label">Adresse</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_adresse" name="p_adresse" placeholder="Skriv adressen" value="{$p_adresse}">
        </div>
    </div>
    <div class="form-group">
        <label for="p_postnr" class="col-sm-3 control-label">Postnummer</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="p_postnr" name="p_postnr" placeholder="Skriv inn postnummer" value="{$p_postnr}">
        </div>
    </div>
    <input type="hidden" name="action" value="add_person" />
    <input type="hidden" name="step" value="1" />
    <button type="submit" class="btn btn-primary">Registrer</button>
</form>

<a href="index.php">Back to login page</a>
