<?php
    //用法基本上與javascript相同
    for($i = 1; $i <= 10; $i++) {
        if ($i === 4) {
            continue;
        }
        if ($i === 9) {
            break;
        }
        echo "$i <br>";
    }
?>