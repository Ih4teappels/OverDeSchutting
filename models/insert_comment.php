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

//$query2 = "SELECT `name` FROM `reactionform` WHERE `name` = 'peter'";
$query2 = "SELECT * FROM reactionform WHERE song_id = 2";
$result = $mysqli->query($query2);

echo '<table style="width:25%">';

echo '<tr>';
echo '<th>' . 'name';
echo '<th>' . 'email';
echo '<th>' . 'website';
echo '</tr>';

while ($results = $result->fetch_assoc()){

    echo '<tr>';
    echo '<td>' . $results['name'] . '</td>';
    echo '<td>' . $results['email'] . '</td>';
    echo '<td>' . $results['website'] . '</td>';
    echo '</tr>';
};

        ?>
