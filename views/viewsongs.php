<div id="pagewrapper">

<h2 id="pageHeader">Vandaag in de Radio 1 Tour Top 100</h2>

<?php

while ($results = $result->fetch_assoc()){

	echo  '<div id="list5"><div id="100List">';
	echo  '<a href="index.php?page=detail&song=' . $results['id'] . '"><img src="img/' . $results['thumbnail'] . '"></a>';
	echo  '<h3 id="songId">' . $results['id'] . '</h3>';
    echo  '<h4>' . $results['song_title'] . '</h4>';
    echo  '<p>' . $results['small_content'] . '</p>';
    echo '<a id="textText" href="index.php?page=detail&song=' . $results['id'] . '"><img src="img/text.png" id="textimg">Lees meer</a>';
    echo '<img src="img/facebook.png" id="socialimg"><img src="img/twitter.png" id="socialimg"><img src="img/mail.png" id="socialimg">';
    // echo  $results['video'];
    echo  '</div></div>';
    


};

?>
</div>
