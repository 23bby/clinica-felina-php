<?php include "database.php"; ?>

       
       <?php
	   
        $nome_gatto = $_POST["nome_gatto"];
        $id_padrone = $_POST["id_padrone"];
        $id_razza = $_POST["id_razza"];
        $eta = $_POST["eta"];
        $note_gatto = $_POST["note_gatto"];
       
                 
        $sql = "INSERT INTO gatti (nome_gatto, id_padrone, id_razza, eta, note_gatto) VALUES (:nome_gatto, :id_padrone, :id_razza,
        :eta, :note_gatto)"; 

        $result = $db2->prepare($sql);

        $params = array(
          ':nome_gatto' => $nome_gatto,
          ':id_padrone' => $id_padrone,
          ':id_razza' => $id_razza,
          ':eta' => $eta,
          ':note_gatto' => $note_gatto);

        
      $result -> execute($params);
      
      header("Location: form_gatti_ins.php");
 
  exit; 


 ?>