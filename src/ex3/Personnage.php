<?php 

class Personnage {
  	public $nom;
  	public $prenom;
  	public $coordonnees;
  	public $profession;
  	public function __construct($n, $p, $c, $p2) {
    	$this->nom = $n;
    	$this->prenom = $p;
    	$this->coordonnees = $c;
    	$this->profession = $p2;
  	}
}


?>