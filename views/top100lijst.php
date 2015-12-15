<div id="pageWrapper">
            <h2 id="pageHeader">Complete Tour Top</h2><img id="100logo" src="img/top100logo.png">
        

    <?php
        while ($results = $result->fetch_assoc()){

            echo  '<div id="complete100List">';
            echo  '<a href="index.php?page=detail&song=' . $results['id'] . '"><h3 id="songId">' . $results['id'] . '</h3>' . '<h4>' . $results['artist'] . " - " . $results['song_title'] . '</h4></a>';
            // echo  $results['video'];
            echo  '</div>';
    
        };
    ?>

</div>