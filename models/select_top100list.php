<?php
$day = $_GET['day'];
$amount = 5;
$offset = $day * $amount - 10;
$query = "SELECT * FROM top100list LIMIT ".$offset." , 5";

$result = $mysqli->query($query);

?>