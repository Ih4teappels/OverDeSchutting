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

    <div id="react">
        <form method="post" id="reactInput"><br>
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
            <input type="submit">
        </form>
    </div>
</div>