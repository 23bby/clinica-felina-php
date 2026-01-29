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
            <h1 class="m-0">Inserimento nuovo gatto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inserimento gatto</li>
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
                <h3 class="card-title">Inserire i dati richiesti</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method = "POST" action = "inserimento_gatti.php"> 
                <div class="card-body">

                        <div class="form-group">
                   <label for="exampleInputName1">Nome</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Inserire nome" name= "nome_gatto">
                  </div>

                     <div class="form-group">
                        <label for="exampleInputBornDate1">Età</label>
                        <input type="text" class="form-control" id="exampleInputDate1" placeholder="Inserire età" name= "eta" >
                       </div>

                       <div class="form-group">
                       <label for="exampleInputRaces1">Razza</label>
                    <select class="form-control" id="exampleInputRaces1" name= "id_razza">';  
                       <?php 
                        $sql2= 'SELECT * FROM razze_gatti';
                      
                      $result2 = $db2->query($sql2);
                      $result = $result2->fetchAll();
                      foreach ($result as $razza)
                         {
                        echo "<option value = '".$razza['id']."'>".$razza['nome_razza']."</option>";
                     }
                     ?>
                         </select>
                           </div>                       

                     <div class="form-group">
                       <label for="ex">Proprietario</label>
                    <select class="form-control" id="ex" name= "id_padrone">
                     
                       <?php   
                      $sql3 = 'SELECT * FROM padroni';
                         $result3 = $db2->query($sql3);
                         $padroni = $result3->fetchAll();
                          foreach($padroni as $padrone){
                          echo "<option value = '".$padrone['id']."'>".$padrone["nome_padrone"]
                          ." ".$padrone["cognome_padrone"]."</option>"; 
                            } 
                         ?>
                          </select>              
                      </div>

                      <div class="form-group">
                        <label for="exempleInputNote1">Note</label>
                        <textarea class="form-control" id="exampleInputNote1" name= "note_gatto" placeholder="Inserire note" rows="4"></textarea> 
                      </div>

                         </div> 
                      
                      <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                 </form>
                 </div>
                

 </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->



<?php include "footer.html"; ?>