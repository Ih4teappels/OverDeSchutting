<div id="wrapper">

    <div id="pagWrapper">
        <?php
                    include 'models/pagination.php';
        ?>
    </div>


    <div id="pageWrapper">
        <div id="list5">

        

        <?php
            //require 'models/select_top100list.php';
        ?>

        </div>

        <?php
                include 'views/sidebar.php';
        ?>

    <div id="react" action="?page=insert_comment&song_id=($song.id)">
        <form action="" id="reactInput"><br>
            <p>Naam</p><br>
            <input type="text"><br>
            <p>E-mail</p><br>
            <input type="text"><br>
            <p>Website</p><br>
            <input type="text"><br>
            <p>Reactie</p><br>
            <textarea></textarea><br>
            <p>Gegevens onthouden</p><input type="checkbox"><br>
               <p>Mail me bij nieuwe reacties</p><input type="checkbox">
        </form>
    </div>

</div>