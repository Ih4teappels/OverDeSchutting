<div id="pageWrapper">

    <h2 id="pageHeader">Tour Top lijsten van BN'ers</h2>


    <?php

        while ($results = $result->fetch_assoc()){

            echo  '<div id="100List">';
            echo  '<img src="img/' . $results['thumb'] . '">';
            echo  '<h3 id="songId">' . $results['id'] . '</h3>';
            echo  '<h4>' . $results['name'] . '</h4><br>';
            echo  '<p>' . $results['content'] . '</p><br>';
            // echo  $results['video'];
            echo  '</div>';
        };

?>

</div>
