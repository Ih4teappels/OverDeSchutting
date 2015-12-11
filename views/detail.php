<div id="pageWrapper">
    <?php
        if ($results = $result->fetch_assoc()){

            echo  '<div id="henk"><div id="henk2">';
            echo  '<h4>' . $results['song_title'] . '</h4><br>';
            echo  '<h3>' . $results['id'] . '</h3>';
            echo  '<iframe width="693" height="390" src="https://www.youtube.com/embed/' . $results['video'] . '"frameborder="0" allowfullscreen></iframe>';
            echo  '<p>' . $results['content'] . '</p><br>';
            echo  '</div></div>';
        } else {
            echo 'error';
        };


    ?>

    <div id="react">
        <form method="post" id="reactInput" action="?page=detail"><br>
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