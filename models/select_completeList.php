<?php

$query = "SELECT * FROM top100list";

$result = $mysqli->query($query);

while ($results = $result->fetch_assoc()){

	echo  '<div id="complete100List">';
	echo  '<h3>' . $results['id'] . '</h3>' . '<h4>' . $results['artist'] . " - " . $results['song_title'] . '</h4>';
    // echo  $results['video'];
    echo  '</div>';
    


};

?>