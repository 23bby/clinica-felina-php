<?php

class Appuntamento {

private $id;
private $id_veterinario;
private $id_giorno;
private $id_fascia;
private $id_gatto;
private $id_vaccino;

public function __construct($id, $id_veterinario, $id_giorno, $id_fascia, $id_gatto, $id_vaccino) {
$this -> id = $id;
$this -> id_veterinario = $id_veterinario;
$this -> id_giorno = $id_giorno;
$this -> id_fascia = $id_fascia;
$this -> id_gatto = $id_gatto;
$this -> id_vaccino = $id_vaccino;
} 

public function set_id($id) {
$this -> id = $id;
}

public function set_idveterinario($id_veterinario) {
$this -> id_veterinario = $id_veterinario;
}

public function set_idgiorno($id_giorno) {
$this -> id_giorno = $id_giorno;
}

public function set_idfascia($id_fascia) {
$this -> id_fascia = $id_fascia;
}

public function set_idgatto($id_gatto) {
$this -> id_gatto = $id_gatto;
}

public function set_idvaccino($id_vaccino) {
$this -> id_vaccino = $id_vaccino;
}

public function get_id() {
return $this -> id;
}

public function get_idveterinario() {
return $this -> id_veterinario;
}

public function get_idgiorno() {
return $this -> id_giorno;
}

public function get_idfascia() {
return $this -> id_fascia;
}

public function get_idgatto() {
return $this -> id_gatto;
}

public function get_idvaccino() {
return $this -> id_vaccino;
}

public function __toString() {
return "Id: ".$this -> id." Id vet: ".$this -> id_veterinario." Id giorno: "
.$this -> id_giorno." Id fascia: ".$this -> id_fascia." Id gatto: ".$this -> id_gatto.
" Id vaccino: ".$this -> id_vaccino."\n";
}
}

//$app1 = new Appuntamento (1, 2, 4, 5, 6, 7);
//echo $app1;