<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php';
//// Maak de database connectie
require_once 'includes/database.php';


include 'libs/functions.php';

$song = (isset($_GET['song'])) ? $_GET['song'] : '' ;
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

        require 'models/select_bner.php';

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
        include 'models/select_detail.php';
        include "models/select_comments.php";
        include 'views/detail.php';
        
        break;

    case 'insert_comment';
        $id = $_POST['songid'];
        include "models/insert_comment.php";
        header('Location:index.php?page=detail&song='.$id.'');
        break;




    default:

    header('location:index.php?page=viewsongs&day=2'); 


}
include 'views/sidebar.php';
// include 'views/footer.php';