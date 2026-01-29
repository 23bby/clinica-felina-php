<?php

class Padrone {

private $id;
private $nome_padrone;
private $cognome_padrone;
private $telefono_padrone;
private $email_padrone;

function __construct($id, $nome_padrone, $cognome_padrone, $telefono_padrone = null, $email_padrone = null) {
$this -> id = $id;
$this -> nome_padrone = $nome_padrone;
$this -> cognome_padrone = $cognome_padrone;
$this -> telefono_padrone = $telefono_padrone;
$this -> email_padrone = $email_padrone;
}

public function set_id($id) {
$this -> id = $id;
}

public function set_nome($nome_padrone) {
$this -> nome_padrone = $nome_padrone;
}

public function set_cognome($cognome_padrone) {
$this -> cognome_padrone = $cognome_padrone;
}

public function set_telefono($telefono_padrone) {
$this -> telefono_padrone = $telefono_padrone;
}

public function set_email($email_padrone) {
$this -> email_padrone = $email_padrone;
}

public function get_id() {
return $this -> id;
}

public function get_nome() {
return $this -> nome_padrone;
}

public function get_cognome() {
return $this -> cognome_padrone;
}

public function get_telefono() {
return $this -> telefono_padrone;
}

public function get_email() {
return $this -> email_padrone;
}

public function __toString() {
 return "Id: ".$this -> id." Nome: ".$this -> nome_padrone." Cognome: ".$this -> cognome_padrone." Telefono: ".
 $this -> telefono_padrone." Email: ".$this -> email_padrone."\n";
}


}


//$padrone1 = new Padrone(1, "Mario", "Rossi", 456789, "rossi@gmail.com");
//echo $padrone1;
