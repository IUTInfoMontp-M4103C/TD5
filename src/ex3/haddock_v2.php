<?php

require_once 'Coordonnees.php';
require_once 'Personnage.php';

// exemple d'objets classiques
$coord = new Coordonnees("archibald@yopmail.com","Moulinsart");
$haddock = new Personnage("Haddock","Archibald",$coord,"marin");

// affichage de l'encodage JSON de l'objet
echo json_encode($haddock);

?>
