<?php

//$query2 = "SELECT `name` FROM `reactionform` WHERE `name` = 'peter'";
$song = (isset($_GET['song'])) ? $_GET['song'] : '' ;
$query2 = "SELECT * FROM reactionform WHERE song_id=$song ";
// in query 2 zetten WHERE song_id = 2
$resultComments = $mysqli->query($query2);


while ($results = $resultComments->fetch_assoc()){
echo '<div id="commentsWrapper">';
    echo '<p id="nametext">' . $results['name'].'</p>';
    echo '<p id="timetext">' . $results['created_at'].'</p>'.'<br>';
    echo '<p id="reactiontext">' . $results['reaction'].'</p>';
echo '</div>';
}