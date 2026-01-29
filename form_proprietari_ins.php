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

$sql = "SELECT gatti.id, gatti.nome_gatto ,gatti.eta,gatti.note_gatto from gatti JOIN padroni ON gatti.id_padrone = padroni.id";
$result = $db2 -> query($sql);
$gatti = [];

if ($result->rowCount() > 0) {
while($row = $result->fetch()){

$gatto = new Gatto($row["id"], $row["nome_gatto"],$row["eta"],$row["note_gatto"]);

$gatti[] = $gatto;
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
            <h1 class="m-0">Inserimento nuovo proprietario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inserimento proprietario</li>
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


 <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Inserire i dati richiesti</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "inserimento_proprietari.php" method = "POST">
                <div class="card-body">

                  <div class="form-group">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" name = "nome_padrone" id="InputNome" placeholder="Inserire nome">
                  </div>

                  <div class="form-group">
                    <label for="InputCognome">Cognome</label>
                    <input type="text" class="form-control" name = "cognome_padrone" id="InputCognome" placeholder="Inserire cognome">
                  </div>

                   <div class="form-group">
                    <label for="InputEmail">Indirizzo email</label>
                    <input type="email" class="form-control" name = "email_padrone" id="InputEmail" placeholder="Inserire email">
                  </div> 

                  
                

                  <div class="form-group">
                    <label for="InputTel">Telefono</label>
                    <input type="tel" class="form-control" name = "telefono_padrone" id="InputTel" placeholder="Inserire telefono">
                  </div>

                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="puls">Inserisci</button>
                </div>
              </form>
            </div>
            <!-- /.card -->





      </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   </div>
  <!-- /.content-wrapper -->


 <?php include "footer.html" ?>





