<?php

$query = "SELECT * FROM top100list WHERE id = 69";

$result = $mysqli->query($query);

while ($results = $result->fetch_assoc()){

	echo  '<div id="100List">';
	echo  '<img src="img/' . $results['thumbnail'] . '">';
	echo  '<h3>' . $results['id'] . '</h3>';
    echo  '<h4>' . $results['song_title'] . '</h4><br>';
    echo  '<p>' . $results['small_content'] . '</p><br>';
    // echo  $results['video'];
    echo  '</div>';
    


};

?>