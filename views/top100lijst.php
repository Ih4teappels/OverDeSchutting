<div id="wrapper">

    <div id="pagWrapper">
        <?php
                    include 'models/pagination.php';
        ?>
    </div>


    <div id="pageWrapper">
        <div id="list5">
            <h2 id="pageHeader">Complete Tour Top <img id="100logo" src="img/top100logo.png"></h2>
        

        <?php
            require 'models/select_completeList.php';
        ?>

        </div>

        <?php
            include 'views/sidebar.php';
        ?>

    </div>

</div>