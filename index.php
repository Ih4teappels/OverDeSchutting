<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;


include 'views/head.php';
include 'views/header.php';
$page = (empty($_GET['page'])) ? '' : $_GET['page'];






switch ($page) {

    default:

    include 'views/home.php';


}

include 'views/footer.php';