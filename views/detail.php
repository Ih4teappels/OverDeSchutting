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
        <form action="" id="reactInput">
            <p>Naam</p>
            <input type="text"><br>
            <p>E-mail</p>
            <input type="text"><br>
            <p>Website</p>
            <input type="text"><br>
            <p>Reactie</p>
            <textarea></textarea><br>
            <input type="checkbox"><br>
            <input type="checkbox">
        </form>
    </div>

</div>