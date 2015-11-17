<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

$page = (empty($_GET['page'])) ? '' : $_GET['page'];

include 'views/head.php';
include 'views/header.php';



switch ($page) {
    case 'one':
        include 'views/footer.php';
        break;

    default:

    include 'views/home.php';


}

//include 'views/footer.php';