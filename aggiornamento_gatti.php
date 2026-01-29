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

$select = $_POST['select'];

$array_select = explode(" ", $select);


if($array_select[0] == "a"){
header("Location: form_gatti_agg2.php?id=".$array_select[1]);
    exit;

} else {

$sql = "DELETE from gatti WHERE id = '$array_select[1]'";

$statement = $db2->prepare($sql);

$statement->execute(); 
}

?> 