<div id="wrapper">

    <div id="pagWrapper">
        <?php
                    echo "<div id='month' class='monthFont'>"."JULI"."</div>";
                    for($i = 1; $i <= 24; $i++){
                        echo "<div class='numberBlock'><p><b>".$i."</b></p></div>";
                    }
        ?>
    </div>


    <div id="pageWrapper">

        <h2 id="pageHeader">Vandaag in de Radio 1 Tour Top 100</h2>

        <?php
            require 'models/select_top100list.php';
        ?>

    </div>

</div>