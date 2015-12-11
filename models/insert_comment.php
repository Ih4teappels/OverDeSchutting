<?php
if (isset ($_POST['submit'])) {
    $naam = $_POST['naam'];
//echo $name;
    $mail = $_POST['mail'];
//echo $mail;
    $website = $_POST['website'];
//echo $website;
    $comment = $_POST['comment'];
//echo $comment;
    $date = date('Y-m-d H:i');
//echo $date
    $id = $_POST['songid'];



    $query = "INSERT INTO reactionform (name, email, website, reaction,song_id, created_at) VALUES ('" . $naam . "','" . $mail . "','" . $website . "','" . $comment . "','" . $id . "','" . $date . "')";
    $mysqli->query($query);



};


        ?>
    