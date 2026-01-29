<?php
   
 include("head.html");
 include("database.php");
    ?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-sm-6">
            <h1 class="m-0">Inserimento appuntamenti</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inserimento appuntamenti</li>
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
          <div class="col-md-12">



			
			<form action="inserimento_appuntamenti.php" method="post" >
			
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Inserire i dati richiesti</h3>
                </div>
          <!-- /.card-header -->
         <div class="card-body">
        <div class="row">
					 <div class="col-lg-2 col-2">
			   <div class="form-group">
			      <br>
                  <label>Data:</label>
				  <br>
                  <select class="form-control select2" id= "nomr_giorno" name ="nome_giorno" style="width: 100%;">
                    <option selected="selected">Data</option>
					
					 <?php
	  
        $sql20 = "SELECT giorni_settimana.nome_giorno FROM `giorni_settimana`";

          $db = $db2->query($sql20);

          $result = $db->fetchAll();

          foreach ($result as $giorno) {
              echo "<option> ". $giorno['nome_giorno']."</option>"; 
           } 
              
        ?>
		</select>
                </div>
				</div>
		 <div class="col-lg-2 col-2">
			   <div class="form-group">
			      <br>
                  <label>Orario:</label>
				  <br>
                  <select class="form-control select2" id= "nome_fascia_oraria" name ="nome_fascia_oraria" style="width: 100%;">
                    <option selected="selected">Fascia</option>
					
					
					 <?php
	  
        $sql15 = "SELECT fasce_orarie.nome_fascia_oraria FROM `fasce_orarie`";

        $db = $db2->query($sql15);

        $result = $db->fetchAll();

        foreach ($result as $fasce) {
           echo "<option>".$fasce['nome_fascia_oraria']."</option>"; 
        }
       
		
        ?>
                  </select>
                </div>
				</div>
			   <div class="col-lg-2 col-2">
           <br>
             <label>Veterinari:</label>
              <br>
              <select class="form-control select2" id= "cognome_veterinario" name ="cognome_veterinario" style="width: 100%;">
              <option selected="selected">Veterinario</option>
      <?php
	  
        $sql2 = "SELECT veterinari.cognome_veterinario FROM `veterinari`";

        $db = $db2->query($sql2);

        $result = $db->fetchAll();

        foreach ($result as $veterinario) {
              
        echo "<option>". $veterinario['cognome_veterinario']."</option>";
        }

		
        ?>
		</select>
         </div>
				  <div class="col-lg-2 col-2">
				 <br>
                  <label>Gatti:</label>
				  <br>
                 <select class="form-control select2" id = "nome_gatto"  name ="nome_gatto" style="width: 100%;">
    <option selected="selected">Gatto</option>
    <?php
       
        $sql1 = "SELECT gatti.nome_gatto FROM `gatti`";
        $db = $db2->query($sql1);
        $result = $db->fetchAll();
        foreach ($result as $gatto) {
             echo "<option >". $gatto['nome_gatto']."</option>";
        }
    ?>
   </select>
	     </div>
          	   
          <div class="col-lg-2 col-2">
           <br>
             <label>Vaccini:</label>
              <br>
              <select class="form-control select2" id="tipologia_vaccino" name = "tipologia_vaccino" style="width: 100%;">
              <option selected="selected">Vaccino</option>
      <?php
        

        $sql3 = "SELECT vaccini.tipologia_vaccino FROM vaccini;";

        $db = $db2->query($sql3);

        $result = $db->fetchAll();

        foreach ($result as $vaccino) {

           echo "<option>". $vaccino['tipologia_vaccino']."</option>";
        }
        
        ?>
             </select>
         </div>

      </div>
        <label>Note</label>
            <div class = "row">	
	   
	      
          <textarea name="commento" id="commento" rows="1" style="width: 100%;">scrivi...</textarea>
	    </div>	
         </div>

          <div class = "card-footer">
         <button type="submit" style="width: 20%;" class="btn btn-primary"> Inserisci </button>			  
		 </div> 
	  
  </form>
  </div>

<div class = "row">  





 <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Cancellare appuntamento</h3>
                </div>
          <!-- /.card-header -->
         <div class="card-body">
        

       <div class="col-md-12">

<form action="cancelazione_appuntamento.php" method="post">
    
	<label for="id_appuntamento">ID dell'appuntamento:</label><br>
    
	<input type="text" id="id_appuntamento" name="id_appuntamento"><br>
         
         <div class = "card-footer">
	<button type="submit" style="whdth:20%;" class = "btn btn-primary" value="Cancella">Cancella </button>
          </div>

</form>
</div>
</div>
</div>

  
   </div>

 </div>
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   </div>
  <!-- /.content-wrapper -->
 

<?php include "footer.html" ?>
