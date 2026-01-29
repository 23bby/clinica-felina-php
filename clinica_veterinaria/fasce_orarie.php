<?php

class Fascia{

private $id;
private $nome_fascia_oraria;

public function __construct($id, $nome_fascia_oraria) {
$this -> id = $id;
$this -> nome_fascia_oraria = $nome_fascia_oraria;
}

public function set_id($id) {
$this -> id = $id;
}

public function set_nome($nome_fascia_oraria) {
$this -> nome_fascia_oraria = $nome_fascia_oraria;
}

public function get_id() {
return $this -> id;
}

public function get_nome() {
return $this -> nome_fascia_oraria;
}

public function __toString() {
return "Id: ".$this -> id." Nome fascia: ".$this -> nome_fascia_oraria."\n";
}

}

//$fascia1 = new Fascia(1, "prima fascia");
//echo $fascia1;