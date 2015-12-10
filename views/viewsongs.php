<div id="pagewrapper">

<h2 id="pageHeader">Vandaag in de Radio 1 Tour Top 100</h2>

<?php

while ($results = $result->fetch_assoc()){

	echo  '<div id="list5"><div id="100List">';
	echo  '<a href="index.php/page=details.php"><img src="img/' . $results['thumbnail'] . '"></a>';
	echo  '<h3>' . $results['id'] . '</h3>';
    echo  '<h4>' . $results['song_title'] . '</h4><br>';
    echo  '<p>' . $results['small_content'] . '</p><br>';
    // echo  $results['video'];
    echo  '</div></div>';
    


};

?>
</div>
