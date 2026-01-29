<?php

class Veterinario {

private $id;
private $nome_veterinario;
private $cognome_veterinario;

public function __construct($id, $cognome_veterinario, $nome_veterinario = null) {
$this -> id = $id;
$this -> cognome_veterinario = $cognome_veterinario;
$this -> nome_veterinario = $nome_veterinario;
}

public function set_id($id){
$this -> id = $id;
}

public function set_nome($nome_veterinario){
$this -> nome_veterinario = $nome_veterinario;
}

public function set_cognome($cognome_veterinario){
$this -> cognome_veterinario = $cognome_veterinario;
}

public function get_id(){
return $this -> id;
}

public function get_nome(){
return $this -> nome_veterinario;
}

public function get_cognome(){
return $this -> cognome_veterinario;
}

public function __toString() {
return "Id : ".$this -> id." Nome veterinario: ".$this -> nome_veterinario." Cognome veterinario: ".$this -> cognome_veterinario."\n";
}

}

//$vet1 = new Veterinario(1, "mario", "bianchi");
//echo $vet1;

