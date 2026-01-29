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

$select = $_POST['select'];

$sql = "SELECT gatti.id, gatti.nome_gatto from gatti JOIN padroni ON gatti.id_padrone = padroni.id WHERE padroni.id = '$select'";
$result = $db2 -> query($sql);
$gatti = [];

if ($result->rowCount() > 0) {
while($row = $result->fetch()){

$gatto = new Gatto($row["id"], $row["nome_gatto"]);

$gatti[] = $gatto;
}
}else {
    echo "0 risultati";
}




$sql1 = "SELECT id, nome_padrone, cognome_padrone, telefono_padrone, email_padrone FROM padroni WHERE id = '$select'";

$statement = $db2->prepare($sql1);
$statement->execute();
$row = $statement->fetch();

if ($row) {
    $padrone = new Padrone($row["id"], $row["nome_padrone"], $row["cognome_padrone"], $row["telefono_padrone"], $row["email_padrone"]);
} else {
    echo "Nessun risultato trovato";
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
                <h3 class="card-title">Aggiornamento proprietario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "aggiornamento_proprietari.php" method = "POST"> 
                <div class="card-body">
                    
                    <div class="form-group">
                   <input type="hidden" class="form-control" name="id" id="InputId" value="<?php echo $padrone -> get_id(); ?>">
                    </div>

                  <div class="form-group">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" name = "nome_padrone" id="InputNome" value="<?php echo $padrone -> get_nome(); ?>">
                  </div>

                  <div class="form-group">
                    <label for="InputCognome">Cognome</label>
                    <input type="text" class="form-control" name = "cognome_padrone" id="InputCognome" value="<?php echo 
                   $padrone -> get_cognome(); ?>">
                  </div>

                   <div class="form-group">
                    <label for="InputEmail">Indirizzo email</label>
                    <input type="email" class="form-control" name = "email_padrone" id="InputEmail" value="<?php echo 
                   $padrone -> get_email(); ?>">
                  </div> 

                  <div class="form-group">
                    <label for="InputTel">Telefono</label>
                    <input type="tel" class="form-control" name = "telefono_padrone" id="InputTel" value="<?php echo 
                   $padrone -> get_telefono(); ?>">
                  </div>

                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="puls">Aggiorna</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


             </div> <!-- fine colonna sx -->


               <div class="col-md-6">

               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Aggiornamento gatti</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "aggiornamento_gatti.php" method = "POST"> 
                <div class="card-body">

                  <div class="form-group">                
             <?php
              foreach($gatti as $gatto){
                $id_gatto = $gatto -> get_id();
                echo "<div class ='row'><div class='col-sm-6'>
                <div class='small-box'><div class='inner'>
                <p>".$gatto -> get_nome()."</p></div></div></div><div class='col-sm-6'>
               <input type='radio' id='idAggiorna' name='select' value = 'a ".$id_gatto."'>
               <label for='Aggiorna'>Aggiorna</label><br><input type='radio' id='idCancella' name='select'
                value = 'c ".$id_gatto."'>
               <label for='Cancella'>Cancella</label></div></div>";
  
              } ?>
             </div>

              </form>
                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="puls">Aggiorna</button>
                </div>
            </div>
            <!-- /.card -->

          </div>
          <!-- ./col -->


    
      </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   </div>
  <!-- /.content-wrapper -->


<?php include "footer.html" ?>