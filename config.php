<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//connexion à la base de donnée myphpAdmin
// creation d'une fonction dans la config
//on utulise les exceptions.

function connectToDB()//creation de la fonction connectToDB
{
    try {//on try en creant une variable $pdo qui est egale a la creation d'une nouvelle PDO(PHP Data Object)
        //qui prend en compte le nom de ma base de donné ainsi que la localité du serveur (localhost et le numero de port (3306)
        // username est mon nom d'utilisateur et root mon mdp
        $pdo = new PDO("mysql:host=localhost:3306;dbname=piscine_reservation", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        throw new Exception("Impossible de se connecter à la DB : " . $e->getMessage());
    }
}
var_dump(connectToDB());die;
