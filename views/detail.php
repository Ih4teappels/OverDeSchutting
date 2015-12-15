<div id="pageWrapper">
    <div id="pageHeader"><h2>In de Radio 1 Tour Top 100</h2></div>
    <?php

        $previousSong = $song - 1;

        $nextSong = $song + 1;

        if ($results = $result->fetch_assoc()){


            echo '<div ><a href="index.php?page=detail&song=' . $previousSong . '"><h3 id="previousSong">' . $previousSong . '</h3></a></div>';


            echo  '<h3 id="currentSong">' . $results['id'] . '</h3>';
            echo '<div><a href="index.php?page=detail&song=' . $nextSong . '"><h3  id="nextSong">' . $nextSong . '</h3></a></div>';
            echo  '<h4>' . $results['song_title'] . '</h4><br>';




            echo  '<div id="henk"><div id="henk2">';
            // echo  '<h4>' . $results['song_title'] . '</h4><br>';
            // echo  '<h3>' . $results['id'] . '</h3>';
            echo  '<iframe width="693" height="390" src="https://www.youtube.com/embed/' . $results['video'] . '"frameborder="0" allowfullscreen></iframe>';
            echo  '<p>' . $results['content'] . '</p><br>';
            echo  '</div></div>';


        } else {
            echo 'error';
        };






    ?>
    <h2 id="pageHeader">Reageer op dit bericht</h2>
    <div id="react">
        <form method="post" id="reactInput" action="index.php?page=insert_comment"><br>
            <input type="hidden" name="songid" value="<?php echo $results['id'] ?>">
            <p>Naam</p><br>
            <input type="text" name="naam" id="text"><br>
            <p>E-mail</p><br>
            <input type="text" name="mail" id="text"><br>
            <p>Website</p><br>
            <input type="text" name="website" id="text"><br>
            <p>Reactie</p><br>

            <textarea name="comment"></textarea><br>


            <div id="chek"><input type="checkbox"><p>Gegevens onthouden</p><br></div>
            <div id="chek"><input type="checkbox"><p>Mail me bij nieuwe reacties</p></div>
            <input type="submit" name="submit">
        </form>
    </div>
    <h2 id="pageHeader">Reacties op dit bericht</h2>
</div>
