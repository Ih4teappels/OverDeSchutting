<div id="wrapper">

    <div id="pagWrapper">
        <?php
                    include 'models/pagination.php';
        ?>
    </div>


    <div id="pageWrapper">
        <div id="list5">
            <h2 id="pageHeader">Prijsvraag</h2>
        

        <?php
            require 'models/select_prijsvraag.php';
        ?>
        <h3>VRAAG </h3><h3>  Wat was het debuut album van Julien Clerc?</h3>
        </div>

        <?php
            include 'views/sidebar.php';
        ?>

    </div>

</div>