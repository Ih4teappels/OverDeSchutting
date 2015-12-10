<div id="pageWrapper">
            <h2 id="pageHeader">Complete Tour Top <img id="100logo" src="img/top100logo.png"></h2>
        

    <?php
        while ($results = $result->fetch_assoc()){

            echo  '<div id="complete100List">';
            echo  '<h3>' . $results['id'] . '</h3>' . '<h4>' . $results['artist'] . " - " . $results['song_title'] . '</h4>';
            // echo  $results['video'];
            echo  '</div>';
    
        };
    ?>

</div>