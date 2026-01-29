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
$nome_padrone = $_POST['nome_padrone'];
$cognome_padrone = $_POST['cognome_padrone'];
$telefono_padrone = $_POST['telefono_padrone'];
$email_padrone = $_POST['email_padrone'];



$sql = "UPDATE padroni SET nome_padrone = :nome_padrone, cognome_padrone = :cognome_padrone, telefono_padrone = :telefono_padrone, 
email_padrone = :email_padrone WHERE id = '$id'";

$statement = $db2->prepare($sql);

$statement->execute([
	':nome_padrone' => $nome_padrone,
        ':cognome_padrone' => $cognome_padrone,
        ':telefono_padrone' => $telefono_padrone,
        ':email_padrone' => $email_padrone
]);


header("Location: form_proprietari_agg1.php");

exit;

?> 
