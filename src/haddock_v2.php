<?php
// exemple de structure objet
class Coordonnees {
  public $email;
  public $adresse;
  public function __construct($e, $a) {
    $this->email = $e;
    $this->adresse = $a;
  }
}
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
$coord = new Coordonnees("archibald@yopmail.com","Moulinsart");
$haddock = new Personnage("Haddock","Archibald",$coord,"marin");
echo json_encode($haddock);
?>
