<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
//// Maak de database connectie
require_once 'includes/database.php' ;


include 'libs/functions.php';


$page = (empty($_GET['page'])) ? '' : $_GET['page'];

include 'views/head.php';
include 'views/header.php';




switch ($page) {
    case 'home':

        include 'views/home.php';

        break;

    case 'testimonials':

        include 'views/testimonials.php';
        
        break;

    case 'prijsvraag':

        include 'views/prijsvraag.php';
        
        break;

    case 'top100lijst':

        include 'views/top100lijst.php';
        
        break;

	case 'detail':

        include 'views/detail.php';
        
        break;
    



    default:

    // $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

    // $videoItemId = isset($_GET['videoItemId']) ? $_GET['videoItemId'] : "";

    // require 'models/videoitems.php';
    
    // $result = select_videoitems($page_nr);

    

    include 'views/home.php';
        include 'views/footer.php';

}

//include 'views/footer.php';   