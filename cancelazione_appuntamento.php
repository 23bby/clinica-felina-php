<?php

    include ("database.php");

    $id_appuntamento = $_POST['id_appuntamento'];

    $sql = "DELETE FROM appuntamenti WHERE id = ?";

    $stmt = $db2->prepare($sql);

    $stmt->execute([$id_appuntamento]);
	
?>


