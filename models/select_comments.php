<?php

//$query2 = "SELECT `name` FROM `reactionform` WHERE `name` = 'peter'";
$query2 = "SELECT * FROM reactionform ";
// in query 2 zetten WHERE song_id = 2

$result = $mysqli->query($query2);

echo '<table style="width:25%">';

echo '<tr>';
echo '<th>' . 'name';
echo '<th>' . 'email';
echo '<th>' . 'website';
echo '<th>' . 'reaction';
echo '<th>' . 'created_at';
echo '</tr>';

while ($results = $result->fetch_assoc()){

    echo '<tr>';
    echo '<td>' . $results['name'] . '</td>';
    echo '<td>' . $results['email'] . '</td>';
    echo '<td>' . $results['website'] . '</td>';
    echo '<td>' . $results['reaction'] . '</td>';
    echo '<td>' . $results['created_at'] . '</td>';

    echo '</tr>';
};
