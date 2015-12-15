<?php

//$sql = "SELECT title, content FROM newsarticles
//  WHERE title LIKE '%" . $search_string ."%'";
//
//$search_result = $mysqli->query($sql);

$search_string;

$sql = "SELECT * FROM top100list WHERE title, artist LIKE '%$search_string%'";

$search_result = $mysqli->query($sql);

$search_result = resultToArray($search_result);