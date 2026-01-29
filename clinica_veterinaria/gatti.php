<?php

class Gatto {

private $id;
private $nome_gatto;
private $id_razza;
private $id_padrone;
private $note_gatto;
private $eta;

public function __construct($id, $nome_gatto, $eta , $note_gatto , $id_padrone = null, $id_razza = null ){
$this -> id = $id;
$this -> nome_gatto = $nome_gatto;
$this -> id_padrone = $id_padrone;
$this -> id_razza = $id_razza;
$this -> eta = $eta;
$this -> note_gatto = $note_gatto;

}

public function set_id($id){
$this -> id = $id;
}

public function set_nome($nome_gatto) {
$this -> nome_gatto = $nome_gatto;
}

public function set_idrazza($id_razza) {
$this -> id_razza = $id_razza;
}

public function set_idpadrone($id_padrone) {
$this -> id_padrone = $id_padrone;
}

public function set_note($note_gatto){
$this -> note_gatto = $note_gatto;
}

public function set_eta($eta){
$this -> eta = $eta;
}

public function get_id() {
return $this -> id;
}

public function get_nome() {
return $this -> nome_gatto;
}

public function get_idrazza() {
return $this -> id_razza;
}

public function get_idpadrone() {
return $this -> id_padrone;
}

public function get_note(){
return $this -> note_gatto;
}

public function get_eta(){
return $this -> eta;
}

public function __toString() {
return "Id: ".$this -> id." Nome: ".$this -> nome_gatto." Id padrone: ".$this -> id_padrone." Id razza: ".$this -> id_razza.
" Eta: ".$this -> eta." Note: ".$this -> note_gatto."\n";
}

}

//$gatto1 = new Gatto(1, "Semola", 1, 1, 15, "Condilomi");
//echo $gatto1;
//$gatto2 = new Gatto(2, "Zen");
//echo $gatto2;
//$gatto1->set_nome('Semolino');
//$gatto2->set_nome('Morgana');

//echo "\n";


//echo $gatto1->get_nome();
//echo $gatto1;
//echo "<br>";
//echo $gatto2->get_nome();



