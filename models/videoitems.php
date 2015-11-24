<?php

function select_videoitems($page_nr = 1) {

    global $mysqli;

    $nr_items_page = NR_ITEMS_PAGE;

    $offset = ($page_nr-1) * $nr_items_page;

    $sql = "SELECT * FROM overdeschutting LIMIT " . $offset . ", " . $nr_items_page;
    $result = $mysqli->query($sql);
    while($videoitems = $result->fetch_assoc()){
        $videoList[] = $videoitems;
    }
    return $videoList;


}	
