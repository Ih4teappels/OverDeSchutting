<?php


$nr_items_page = NR_ITEMS_PAGE;

$sql = "SELECT * FROM overdeschutting LIMIT " . $offset . ", " . $nr_items_page;
$result = $mysqli->query($sql);

$offset = ($page_nr-1) * $nr_items_page;



//for($i = 0; $i < $offset; $i++){
//    echo "ja";
//}
//
//$sql = "SELECT * FROM newsarticles LIMIT " . $offset . ", " . $nr_items_page;
//$result = $mysqli->query($sql);
