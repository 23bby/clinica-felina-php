<?php include "head.html"; include "database.php"?>



<?php

include "clinica_veterinaria/appuntamenti.php"; 
include "clinica_veterinaria/fasce_orarie.php"; 
include "clinica_veterinaria/gatti.php"; 
include "clinica_veterinaria/giorni_settimana.php"; 
include "clinica_veterinaria/padroni.php"; 
include "clinica_veterinaria/razze_gatti.php"; 
include "clinica_veterinaria/vaccini.php"; 
include "clinica_veterinaria/veterinari.php"; 
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-sm-6">
            <h1 class="m-0">Calendario appuntamenti</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendario appuntamenti</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-2">
          <div class="col-12">

<?php

$sql2 = "SELECT appuntamenti.id, veterinari.cognome_veterinario, giorni_settimana.nome_giorno, giorni_settimana.progressivo, 
fasce_orarie.nome_fascia_oraria, gatti.nome_gatto,gatti.eta,gatti.note_gatto, 
vaccini.tipologia_vaccino FROM vaccini INNER JOIN (gatti INNER JOIN (veterinari INNER JOIN (`giorni_settimana` INNER JOIN 
(appuntamenti INNER JOIN fasce_orarie ON fasce_orarie.id = appuntamenti.id_fascia) ON giorni_settimana.id = appuntamenti.id_giorno) 
ON veterinari.id = appuntamenti.id_veterinario) ON gatti.id = appuntamenti.id_gatto) ON vaccini.id = appuntamenti.id_vaccino 
ORDER BY veterinari.cognome_veterinario, giorni_settimana.id, fasce_orarie.id";

$result2 = $db2->query($sql2);

$appuntamenti = array(); 

if ($result2->rowCount() > 0) {
    
    while($row = $result2->fetch()) {
        //print_r($row);
        //$appuntamento = new Appuntamento($row["id"], $row["id_veterinario"], $row["id_giorno"], $row["id_fascia"], 
        //$row["id_gatto"], $row["id_vaccino"]);
        
        $veterinario = new Veterinario($row["id"], $row["cognome_veterinario"]);
        $giorno_settimana = new Giorno($row["id"], $row["nome_giorno"], $row["progressivo"]);
        $fascia_oraria = new Fascia($row["id"], $row["nome_fascia_oraria"]);
        $gatto = new Gatto($row["id"], $row["nome_gatto"],$row["eta"],$row["note_gatto"]);
        $vaccino = new Vaccino($row["id"], $row["tipologia_vaccino"]);
        
       $appuntamenti[] = array("veterinario" => $veterinario, "giorno" => $giorno_settimana, "fascia" => $fascia_oraria, 
        "gatto" => $gatto, "vaccino" => $vaccino);

        /*$appuntamenti1[] = array("veterinario" => $veterinario -> get_cognome());*/
       
}
} else {
    echo "0 risultati";
}


$vet_prima = ""; 
$giorno_prima = $appuntamenti[0]["giorno"] -> get_progressivo();

$gg = array("Lunedi", "Martedi", "Mercoledi", "Giovedi", "Venerdi", "Sabato");

echo "<div class='card card-primary'>
  <div class='card-header'><h3 class = 'card-title'>
    Appuntamenti settimanali</h3>
  </div>";
echo "<table class = 'table table-bordered'><tr><th></th><th>Lunedì</th><th>Martedì</th>
<th>Mercoledì</th><th>Giovedì</th><th>Venerdì</th><th>Sabato</th></tr>";


for($i = 0; $i < count($appuntamenti); $i++) {
 $vet_ora = $appuntamenti[$i]["veterinario"] -> get_cognome();
 $giorno_ora = $appuntamenti[$i]["giorno"] -> get_progressivo();
   if($vet_ora == $vet_prima){
      
       if($giorno_ora == $giorno_prima){
         echo "<strong>".$appuntamenti[$i]["fascia"] -> get_nome()."</strong><br>".$appuntamenti[$i]["gatto"] -> get_nome().
         "<br>".$appuntamenti[$i]["vaccino"] -> get_tipologiavaccino()."</td>";
         
         } else {
        echo "</td>";
        
         for($k = $giorno_prima + 1; $k <= $giorno_ora; $k++){ //qui deve stampare dall'appuntamento al prox appuntamento
          if($giorno_ora != $k){
         echo "<td></td>";
         } else {
         echo "<td><strong>".$appuntamenti[$i]["fascia"] -> get_nome()."</strong><br>".
         $appuntamenti[$i]["gatto"] -> get_nome()."<br>".$appuntamenti[$i]["vaccino"] -> get_tipologiavaccino()."<br>";
        }
         } //chiude il for
        } //chiude l'else
    } else {
   if($vet_prima != ""){ //così nel primissimo ciclo non stampa la riga sopra vuota
   if($giorno_prima < count($gg)){

    for($y = $giorno_prima +1; $y < count($gg); $y++){
echo "<td></td>";
}
}
}
   echo "</tr>";
   echo "<tr><td><strong>Dott.</strong><br><strong>".$vet_ora."</strong></td>";

   for($j = 0; $j <= $giorno_ora; $j++){ //qui deve stampare da 0 al primo appuntamento
   if($giorno_ora != $j){
   echo "<td></td>";
   }else {
   echo "<td><strong>".$appuntamenti[$i]["fascia"] -> get_nome()."</strong><br> ".
   $appuntamenti[$i]["gatto"] -> get_nome()."<br>".$appuntamenti[$i]["vaccino"] -> get_tipologiavaccino()."<br>";
   }
}
}
 
 $vet_prima = $appuntamenti[$i]["veterinario"] -> get_cognome();
 $giorno_prima = $appuntamenti[$i]["giorno"] -> get_progressivo();
 
}
if($giorno_prima < count($gg)){
    for($y = $giorno_prima +1; $y < count($gg); $y++){
echo "<td></td>";
}
}
echo "</table>";


 
?>


</div>
</div>


 </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->




<?php include "footer.html" ?>



