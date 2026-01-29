<?php

include ("database.php");

$cognome_veterinario = $_POST['cognome_veterinario'];
$nome_gatto = $_POST['nome_gatto'];
$tipologia_vaccino = $_POST['tipologia_vaccino'];
$nome_fascia_oraria = $_POST['nome_fascia_oraria'];
$nome_giorno = $_POST['nome_giorno'];

$sql = "INSERT INTO appuntamenti (id_veterinario, id_gatto, id_vaccino, id_fascia, id_giorno)
        SELECT veterinari.id, gatti.id, vaccini.id, fasce_orarie.id, giorni_settimana.id
        FROM veterinari, gatti, vaccini, fasce_orarie, giorni_settimana
        WHERE veterinari.cognome_veterinario = :cognome_veterinario AND gatti.nome_gatto = :nome_gatto 
AND vaccini.tipologia_vaccino = :tipologia_vaccino AND fasce_orarie.nome_fascia_oraria = :nome_fascia_oraria 
AND giorni_settimana.nome_giorno = :nome_giorno";

$stmt = $db2->prepare($sql);

$params = array( 
    ':cognome_veterinario' => $cognome_veterinario,
    ':nome_gatto' => $nome_gatto,
    ':tipologia_vaccino' => $tipologia_vaccino,
    ':nome_fascia_oraria' => $nome_fascia_oraria,
    ':nome_giorno' => $nome_giorno
);

$stmt->execute($params);

header("Location: form_appuntamenti.php");
 
    exit;

?>

