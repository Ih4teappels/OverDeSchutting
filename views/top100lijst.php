<div id="wrapper">

    <div id="pagWrapper">
        <?php
                include 'models/pagination.php';
        ?>
    </div>


    <div id="pageWrapper">

        <h2>Vandaag in de Radio 1 Tour Top 100</h2>

        <?php
        	require 'models/select_top100list.php';
        ?>

    </div>

</div>