<?php include "head.html"; include "database.php"; ?>

<?php include "clinica_veterinaria/appuntamenti.php"; ?>
<?php include "clinica_veterinaria/fasce_orarie.php"; ?>
<?php include "clinica_veterinaria/gatti.php"; ?>
<?php include "clinica_veterinaria/giorni_settimana.php"; ?>
<?php include "clinica_veterinaria/padroni.php"; ?>
<?php include "clinica_veterinaria/razze_gatti.php"; ?>
<?php include "clinica_veterinaria/vaccini.php"; ?>
<?php include "clinica_veterinaria/veterinari.php"; ?>



<?php 

$id = $_GET['id'];


$sql1 = "SELECT gatti.id, gatti.nome_gatto, gatti.eta, gatti.note_gatto, razze_gatti.nome_razza, 
padroni.nome_padrone, padroni.cognome_padrone 
FROM padroni JOIN (razze_gatti JOIN gatti ON razze_gatti.id = gatti.id_razza) ON padroni.id = gatti.id_padrone WHERE gatti.id = '$id'";

$result1 = $db2 -> query($sql1);

if ($result1->rowCount() > 0) {
while($row = $result1->fetch()){


$gatto = new Gatto($row["id"], $row["nome_gatto"], $row["eta"], $row["note_gatto"]);
$razza = new Razza($row["id"], $row["nome_razza"]);
$padrone = new Padrone($row["id"], $row["nome_padrone"], $row["cognome_padrone"]);
echo "l'id del gatto che mi viene è ".$gatto -> get_id();
}
}else {
   echo "0 risultati";
}


?> 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-sm-6">
            <h1 class="m-0">Aggiornamento anagrafica</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form inserimento</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
     <div class="row">
          <!-- left column -->
          <div class="col-md-6">


 
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Aggiornamento gatto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "aggiornamento_gatti1.php" method = "POST"> 
                <div class="card-body">
                    
                    <div class="form-group">
                   <input type="hidden" class="form-control" name="id" id="InputId" value="<?php echo $gatto -> get_id(); ?>">
                    </div>
                  
                  <div class="form-group">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" name = "nome_gatto" id="InputNome" value="<?php echo $gatto -> get_nome(); ?>">
                  </div>

                  <div class="form-group">
                    <label for="InputEta">Età</label>
                    <input type="text" class="form-control" name = "eta" id="InputEta" value="<?php echo 
                   $gatto -> get_eta(); ?>">
                  </div>

                  

                   <div class="form-group">
                       <label for="InputRazze">Razza</label>
                    <select class="form-control" id="InputRazze" name= "id_razza">';
                     <option selected="selected">
                     <?php echo $razza -> get_nome(); ?></option>  
                       <?php 
                       $sql2= 'SELECT * FROM razze_gatti';
                      
                      $result2 = $db2->query($sql2);
                      $risultati = $result2->fetchAll(); 
                      foreach ($risultati as $razza)
                         {
                        
                        echo "<option value = '".$razza['id']."'>".$razza['nome_razza']."</option>";
                     
                     }
                     ?>
                         </select>
                           </div>

                   <div class="form-group">
                       <label for="InputPadrone">Proprietario</label>
                    <select class="form-control" id="InputPadrone" name= "id_padrone">';
                     <option selected="selected">
                     <?php echo $padrone -> get_nome()." ".$padrone -> get_cognome(); ?></option>  
                       <?php 
                       $sql3= 'SELECT * FROM padroni';
                      
                      $result3 = $db2->query($sql3);
                      $risultati2 = $result3->fetchAll(); 
                      foreach ($risultati2 as $padrone)
                         {
                        
                        echo "<option value = '".$padrone['id']."'>".$padrone['nome_padrone'].' '.$padrone['cognome_padrone']."</option>";
                     
                     }
                     ?>
                         </select>
                           </div>



                     <div class="form-group">
                    <label for="InputNote">Note</label>
                    <input type="text" class="form-control" name = "note_gatto" id="InputNote" value="<?php echo 
                   $gatto -> get_note(); ?>" rows = "4">
                  </div>

                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="puls">Aggiorna</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


             </div> <!-- fine colonna sx -->


 


    
      </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   </div>
  <!-- /.content-wrapper -->


<?php include "footer.html" ?>