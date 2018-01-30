<?php

// Permet d'activer temporairement les erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

/* 
 * define() permet de définir une constante
 * TOUJOURS en majuscules le nom des constantes
 */
define('SITE_NAME', 'Blog de jacqueline');

/* OPTIONEL -- Des constantes pour le chemins des dossiers
define('ROOT', str_replace('/public/index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('WEBROOT', str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']));
define('DIR_ASSETS', WEBROOT . '/assets');
define('DIR_APP', ROOT . '/app');
define('DIR_CONFIG', DIR_APP . '/config');
define('DIR_MODELS', ROOT . '/models');
*/

// On inclus les infos de la BDD
require ('db.php'); // ou include()

// connexion à la bdd
$dsn = "mysql:host=".$db['host'].";dbname=".$db['dbname'].';charset=utf8;';
$options = array(
    PDO::ATTR_PERSISTENT    => true,
    PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
);

try{
    $bdd = new PDO($dsn, $db['user'], $db['password'], $options);
}
// catch any errors
catch (PDOException $e){
    $error = $e->getMessage();
}

$token = '13245';