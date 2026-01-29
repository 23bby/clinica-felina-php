<?php include "database.php"; ?>

<?php include "clinica_veterinaria/appuntamenti.php"; ?>
<?php include "clinica_veterinaria/fasce_orarie.php"; ?>
<?php include "clinica_veterinaria/gatti.php"; ?>
<?php include "clinica_veterinaria/giorni_settimana.php"; ?>
<?php include "clinica_veterinaria/padroni.php"; ?>
<?php include "clinica_veterinaria/razze_gatti.php"; ?>
<?php include "clinica_veterinaria/vaccini.php"; ?>
<?php include "clinica_veterinaria/veterinari.php"; ?>


<?php 


$id = $_POST['id'];
$nome_gatto = $_POST['nome_gatto'];
$eta = $_POST['eta'];
$note_gatto = $_POST['note_gatto'];
$id_razza = $_POST['id_razza'];
$id_padrone = $_POST['id_padrone'];


$sql = " 
UPDATE gatti SET nome_gatto = :nome_gatto, id_padrone = :id_padrone, id_razza = :id_razza, eta = :eta, note_gatto = :note_gatto
WHERE gatti.id = '$id'";

$statement = $db2->prepare($sql);

$statement->execute([
	':nome_gatto' => $nome_gatto,
        ':eta' => $eta,
        ':note_gatto' => $note_gatto,
        ':id_razza' => $id_razza,
        ':id_padrone' => $id_padrone
]);


header("Location: form_gatti_agg.php");

exit;

?> 
