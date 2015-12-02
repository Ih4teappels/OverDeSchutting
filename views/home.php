<div id="wrapper">

    <div id="pagWrapper">
        <?php
                    include 'models/pagination.php';
        ?>
    </div>


    <div id="pageWrapper">
        <div id="list5">
            <h2 id="pageHeader">Vandaag in de Radio 1 Tour Top 100</h2>
        

        <?php
            require 'models/select_top100list.php';
        ?>

        </div>

        <?php
            include 'views/sidebar.php';
        ?>

    </div>

</div>