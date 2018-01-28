<?php

// define permet de définir une constante
define('ROOT', $_SERVER['SCRIPT_FILENAME']);
define('WEBROOT', ROOT . '/public');

// Chemins
define('DIR_ASSETS', WEBROOT . '/assets');
define('DIR_APP', ROOT . '/app');
define('DIR_CONFIG', DIR_APP . '/config');
define('DIR_MODELS', ROOT . '/models');

// meta
define('SITE_NAME', 'Mon site lol');

include(DIR_CONFIG . '/db.php');

// connexion à la bdd
