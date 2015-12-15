<?php

//$query2 = "SELECT `name` FROM `reactionform` WHERE `name` = 'peter'";
$song = (isset($_GET['song'])) ? $_GET['song'] : '' ;
$query2 = "SELECT * FROM reactionform WHERE song_id=$song ";
// in query 2 zetten WHERE song_id = 2
$result = $mysqli->query($query2);


while ($results = $result->fetch_assoc()){
echo '<div id="commentsWrapper">';
    echo '<p>' . $results['name'].'</p>';
    echo '<p>' . $results['email'].'</p>';
    echo '<p>' . $results['website'].'</p>';
    echo '<p>' . $results['reaction'].'</p>';
    echo '<p>' . $results['created_at'].'</p>';
echo '</div>';
}