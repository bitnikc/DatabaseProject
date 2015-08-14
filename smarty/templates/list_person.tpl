<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Person ID</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Telefon Nummer</th>
            <th>Epost</th>
            <th>Adresse</th>
            <th>Post Nummer</th>
        </tr>
    </thead>
    <tbody>
        {foreach $person as $pers}
            <tr>
                <td>{$pers.p_personID}</td>
                <td>{$pers.p_fornavn}</td>
                <td>{$pers.p_etternavn}</td>
                <td>{$pers.p_tlfnummer}</td>
                <td>{$pers.p_epost}</td>
                <td>{$pers.p_adresse}</td>
                <td>{$pers.p_postnr}</td>             
            </tr>
        {/foreach}
    </tbody>
</table>

<a href="index.php?action=add_person">Legg til ny Person!</a>