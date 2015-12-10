<?php
    $naam = $_POST['naam'];
//echo $name;
    $mail = $_POST['mail'];
//echo $mail;
    $website = $_POST['website'];
//echo $website;
    $comment = $_POST['comment'];
//echo $comment;

//
$query = "INSERT INTO reactionform (name, email, website, reaction) VALUES ('".$naam."','".$mail."','".$website."','".$comment."')";
$mysqli->query($query);

        ?>
