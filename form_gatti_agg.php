<?php include "head.html"; include "database.php"; ?>

<?php include "clinica_veterinaria/appuntamenti.php"; ?>
<?php include "clinica_veterinaria/fasce_orarie.php"; ?>
<?php include "clinica_veterinaria/gatti.php"; ?>
<?php include "clinica_veterinaria/giorni_settimana.php"; ?>
<?php include "clinica_veterinaria/padroni.php"; ?>
<?php include "clinica_veterinaria/razze_gatti.php"; ?>
<?php include "clinica_veterinaria/vaccini.php"; ?>
<?php include "clinica_veterinaria/veterinari.php"; ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-5"> 
          <div class="col-sm-6">
            <h1 class="m-0">Aggiornamento gatti</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Aggiornamento gatti</li>
            </ol>
          </div><!-- /.col -->
        </div> <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
     <div class="row">
          <!-- left column -->
          <div class="col-md-9">


<?php

$sql_due = "SELECT gatti.*,padroni.nome_padrone, padroni.cognome_padrone  FROM gatti JOIN padroni 
ON padroni.id = gatti.id_padrone ORDER BY cognome_padrone ASC, nome_padrone ASC";

$result = $db2->query($sql_due);

$output = array(); 

if ($result->rowCount() > 0) {
    
    while($row = $result->fetch()) {
        $gatto = new Gatto($row["id"], $row["nome_gatto"],$row["eta"] ,$row["note_gatto"]);
        $padrone = new Padrone($row["id"], $row["nome_padrone"], $row["cognome_padrone"]);
        
        $output[] = array("gatto" => $gatto, "padrone" => $padrone);
    }
} else {
    echo "0 risultati";
}

echo "<div class='card card-primary'>
  <div class='card-header'><h3 class = 'card-title'>
    Selezionare il gatto</h3>
  </div><div class='card-body table-responsive p-0' style='height: 300px;'><form action = 'form_gatti_agg1.php' method = 'POST'>
<table class = 'table table-bordered'><tr><th><strong>Nome gatto</strong></th><th><strong>Eta</strong</th><th><strong>Nome proprietario</strong></th><th><strong>Note</strong></th><th></th></tr>";

foreach ($output as $value) {
    $id_gatto = $value["gatto"] -> get_id();
    echo "<tr><td>".$value["gatto"] -> get_nome()."</td><td>".$value["gatto"] -> get_eta()."</td><td>".$value["padrone"] -> get_nome()." ".$value["padrone"] -> get_cognome()."</td><td>".$value["gatto"] -> get_note().
   "</td><td><div class='form-group'><input type='radio' id='Aggiorna' value = '$id_gatto' name='select'>
               </div></td></tr>";
}

echo "</table></div><div class='card-footer'>
                  <button type='submit' class='btn btn-primary' id='puls'>Seleziona</button>
                </div>
                 </div>
                
                </div></form>"; 

?>
 
      </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   </div>
  <!-- /.content-wrapper -->


 

<?php include "footer.html" ?>





