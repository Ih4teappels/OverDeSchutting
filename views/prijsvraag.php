<div id="pagewrapper">

<h2 id="pageHeader">Vandaag in de Radio 1 Tour Top 100</h2>

<?php

while ($results = $result->fetch_assoc()){

    echo  '<div id="100List">';
    echo  '<a href="index.php?page=detail&song=' . $results['id'] . '"><img src="img/' . $results['thumbnail'] . '"></a>';
    echo  '<h3 id="songId">' . $results['id'] . '</h3>';
    echo  '<h4>' . $results['song_title'] . '</h4><br>';
    echo  '<p>' . $results['small_content'] . '</p><br>';
    // echo  $results['video'];
    echo  '</div>';
    


};

?>
        <div id="debuutVraag">
        <h3>VRAAG </h3>
        <h3 id="question">  Wat was het debuut album van Julien Clerc?</h3>
        </div>

        <h2 id="pageHeader">Doe mee aan deze prijsvraag</h2>

        <!-- <form id="quizForm"> -->
        <div style="font-weight: bold; font-size: 13px;">
            <p>Naam </p><input id="quizInput" type="text" name="user"><br>
            <p>E-mail </p><input id="quizInput" type="text" name="user"><br>
            <p>Antwoord </p><input id="quizInput" type="text" name="user"><br>

            <input type="checkbox" style="margin-top: 2em;">inschrijven voor de nieuwsbrief

            <input type="submit" value="verstuur" style="margin-left: 10em; background-color: #000; color: #fff; border-radius: 7px; font-weight:bold; border: #000 0px; padding: .35em;">

        </div>
        <!-- </form> -->
    </div>