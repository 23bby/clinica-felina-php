<?php

class Razza {

private $id;
private $nome_razza;

public function __construct($id, $nome_razza) {
$this -> id = $id;
$this -> nome_razza = $nome_razza;
}

public function set_id($id){
$this -> id = $id;
}

public function set_nome($nome_razza){
$this -> nome_razza = $nome_razza;
}

public function get_id(){
return $this -> id;
}

public function get_nome(){
return $this -> nome_razza;
}

public function __toString(){
return "Id: ".$this -> id." Nome razza: ".$this -> nome_razza."\n";
}

}


//$razza_uno = new Razza(1, "certosino");
//echo $razza_uno;
