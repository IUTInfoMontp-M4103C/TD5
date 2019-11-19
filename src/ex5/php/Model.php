<?php

class Model {

    public static $pdo;

    public static function init_pdo() {
        $host   = Conf::getHostname();
        $dbname = Conf::getDatabase();
        $login  = Conf::getLogin();
        $pass   = Conf::getPassword();
        try {
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die("Problème lors de la connexion à la base de données.");
        }
    }

    public static function select($lettre,$type) {
        try {
            // préparation de la requête
            $sql = "SELECT * FROM verbes WHERE libelle LIKE :name_tag LIMIT 50";
            $req_prep = self::$pdo->prepare($sql);
            // préparation du tag en fonction du type de recherche (par initiale ou par séquence)
            // - par initiale : "$lettre%"
            // - par séquence : "%$lettre%"
            $l = "$lettre%";
            if ($type == "seq") $l = "%$lettre%";
            $values = array("name_tag" => $l);
            // exécution
            $req_prep->execute($values);
            $tabResults = $req_prep->fetchAll();
            // tableau résultat retourné
            return $tabResults;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur lors de la recherche dans la base de données.");
        }
    }

}

// on initialise la connexion $pdo
Model::init_pdo();
