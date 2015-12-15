<div id="pageWrapper">
    <?php

        $previousSong = $song - 1;

        $nextSong = $song + 1;

        if ($results = $result->fetch_assoc()){

            echo '<div id="previousSong"><a href="index.php?page=detail&song=' . $previousSong . '"><h3>' . $previousSong . '</h3></a></div>';

            echo  '<h3>' . $results['id'] . '</h3>';
            echo  '<h4>' . $results['song_title'] . '</h4><br>';

            echo '<a href="index.php?page=detail&song=' . $nextSong . '"><div id="nextSong"><h3>' . $nextSong . '</h3></a></div>';
            

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

    <div id="react">
        <form method="post" id="reactInput" action="index.php?page=insert_comment"><br>
            <input type="hidden" name="songid" value="<?php echo $results['id'] ?>">
            <p>Naam</p><br>
            <input type="text" name="naam"><br>
            <p>E-mail</p><br>
            <input type="text" name="mail"><br>
            <p>Website</p><br>
            <input type="text" name="website"><br>
            <p>Reactie</p><br>

            <textarea name="comment"></textarea><br>


            <div id="button1"><p>Gegevens onthouden</p><input type="checkbox"><br></div>
               <div id="button2"><p>Mail me bij nieuwe reacties</p><input type="checkbox"></div>
            <input type="submit" name="submit">
        </form>
    </div>
</div>