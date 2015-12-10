<div id="pagwrapper">

<?php

echo "<div id='month' class='monthFont'>"."JULI"."</div>";
                    for($i = 2; $i <= 24; $i++){
                        echo "<a href='?page=viewsongs&day=".$i."'><div class='numberBlock'><p><b>".$i."</b></p></div></a>";
                    }

?>


</div>