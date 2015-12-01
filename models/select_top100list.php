<?php

$query = "SELECT * FROM top100list";

$result = $mysqli->query($query);

while ($results = $result->fetch_assoc()){

	echo  '<div id="100List">';
	echo  '<img src="img/' . $results['thumbnail'] . '">';
	echo  '<h2>' . $results['id'] . '</h2><br>';
    echo  '<h3>' . $results['title'] . '</h3><br>';
    echo  '<p>' . $results['content'] . '</p><br>';
    // echo  $results['video'];
    echo  '</div>';
    


};

?>