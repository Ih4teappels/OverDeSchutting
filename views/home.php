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
        <div id="list5">
            <h2 id="pageHeader">Vandaag in de Radio 1 Tour Top 100</h2>
        

        <?php
            require 'models/select_top100list.php';
        ?>

        </div>

        <div id="sidebar">
            <img src="img/bannertop100.png">
            <img src="img/bannerprijsvraag.png">
            <img src="img/banner.png">
            <img src="img/bannertestimonials.png">
            <img src="img/banner2.png">
        </div>

    </div>

</div>