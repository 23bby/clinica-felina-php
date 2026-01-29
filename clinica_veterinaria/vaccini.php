<?php

class Vaccino {

private $id;
private $tipologia_vaccino;
private $durata_vaccino;

public function __construct($id, $tipologia_vaccino, $durata_vaccino = null) {
$this -> id = $id;
$this -> tipologia_vaccino = $tipologia_vaccino;
$this -> durata_vaccino = $durata_vaccino;
}

public function set_id($id) {
$this -> id = $id;
}

public function set_tipologiavaccino($tipologia_vaccino) {
$this -> tipologia_vaccino = $tipologia_vaccino;
}

public function set_duratavaccino($durata_vaccino) {
$this -> durata_vaccino = $durata_vaccino;
}

public function get_id() {
return $this -> id;
}

public function get_tipologiavaccino() {
return $this -> tipologia_vaccino;
}

public function get_duratavaccino() {
return $this -> durata_vaccino;
}

public function __toString() {
return "Id: ".$this -> id." Tipologia vaccino: ".$this -> tipologia_vaccino." Durata vaccino: ".$this -> durata_vaccino;
}

}


//$vaccino1 = new Vaccino(1, "felv", 365);
//echo $vaccino1;

//echo $vaccino1->get_tipologia_vaccino();


