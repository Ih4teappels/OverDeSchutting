<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php';
//// Maak de database connectie
require_once 'includes/database.php';


include 'libs/functions.php';


$page = (isset($_GET['page'])) ? $_GET['page'] : '' ;

include 'views/head.php';
include 'views/header.php';

include 'views/pagination.php';


switch ($page) {

    case 'viewsongs':

        require 'models/select_top100list.php';


        include 'views/viewsongs.php';

        break;

    case 'testimonials':

        include 'views/testimonials.php';
        
        break;

    case 'prijsvraag':

        require 'models/select_prijsvraag.php';

        include 'views/prijsvraag.php';
        
        break;

    case 'top100lijst':

        include 'models/select_completeList.php';

        include 'views/top100lijst.php';
        
        break;

	case 'detail':
    include 'views/detail.php';
        include "models/insert_comment.php";
        include "models/select_comments.php";
        

//        header('lacation:index.php?action=view_ ');
        break;
    



    default:

    // $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

    // $videoItemId = isset($_GET['videoItemId']) ? $_GET['videoItemId'] : "";

    // require 'models/videoitems.php';
    
    // $result = select_videoitems($page_nr);

    
    // include 'views/home.php';
    // header('location:index.php?page=2');


}
include 'views/sidebar.php';
// include 'views/footer.php';