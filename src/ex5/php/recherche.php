<?php

require_once 'Conf.php';
require_once 'Model.php';

// récupération de la lettre et dy type de recherche, passés en get
$lettre = $_GET['lettre'];
$type = $_GET['type'];

// récupération du résultat de la requête SQL
$tab_verbes = Model::select($lettre,$type);

// affichage pour le responseText de l'objet XmlHttpRequest
echo json_encode($tab_verbes);
