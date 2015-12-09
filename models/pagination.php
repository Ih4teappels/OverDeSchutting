<?php

echo "<div id='month' class='monthFont'>"."JULI"."</div>";
                    for($i = 1; $i <= 24; $i++){
                        echo "<a href='?page=".$i."'><div class='numberBlock'><p><b>".$i."</b></p></div></a>";
                    }

?>