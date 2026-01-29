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
            <h1 class="m-0">Aggiornamento proprietari</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Aggiornamento proprietari</li>
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
$sql_due = "SELECT id, nome_padrone, cognome_padrone FROM padroni";

$result = $db2->query($sql_due);

$padroni = array(); 

if ($result->rowCount() > 0) {
    
    while($row = $result->fetch()) {
        
        $padrone = new Padrone($row["id"], $row["nome_padrone"], $row["cognome_padrone"]);
        
        $padroni[] = $padrone;
    }
} else {
    echo "0 risultati";
}

echo "<div class='card card-primary'>
  <div class='card-header'><h3 class = 'card-title'>
    Selezionare il nominativo</h3>
  </div><div class='card-body table-responsive p-0' style='height: 300px;'><form action = 'form_proprietari_agg2.php' method = 'POST'>
<table class = 'table table-bordered'><tr><th><strong>Nome</strong></th><th><strong>Cognome</strong></th><th></th></tr>";
foreach ($padroni as $padrone) {
    $id_padrone = $padrone -> get_id();
    echo "<tr><td>".$padrone -> get_nome()."</td><td>".$padrone -> get_cognome().
   "</td><td><div class='form-group'><input type='radio' id='Aggiorna' value = '$id_padrone' name='select'>
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





