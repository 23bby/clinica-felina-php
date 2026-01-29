<?php

class Giorno {

private $id;
private $nome_giorno;
private $progressivo;

function __construct($id, $nome_giorno, $progressivo) {
$this -> id = $id;
$this -> nome_giorno = $nome_giorno;
$this -> progressivo = $progressivo;
}

public function set_id($id) {
$this -> id = $id;
}

public function set_nome($nome_giorno) {
$this -> nome_giorno = $nome_giorno;
}

public function set_progressivo($progressivo) {
$this -> progressivo = $progressivo;
}

public function get_id() {
return $this -> id;
}

public function get_nome() {
return $this -> nome_giorno;
}

public function get_progressivo() {
return $this -> progressivo;
}

public function __toString() {
return "Id: ".$this -> id." Nome giorno: ".$this -> nome_giorno."Progressivo: ".$this -> progressivo."\n";
}

}

//$giorno1 = new Giorno(1, "Lunedi", 0);
//echo $giorno1;