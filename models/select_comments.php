<?php

//$query2 = "SELECT `name` FROM `reactionform` WHERE `name` = 'peter'";
$song = (isset($_GET['song'])) ? $_GET['song'] : '' ;
$query2 = "SELECT * FROM reactionform WHERE song_id=$song ";
// in query 2 zetten WHERE song_id = 2
$result = $mysqli->query($query2);







while ($results = $result->fetch_assoc()){

    echo $results['name'] . '</td>';
    echo $results['email'] . '</td>';
    echo $results['website'] . '</td>';
    echo $results['reaction'] . '</td>';
    echo $results['created_at'] . '</td>';


}
