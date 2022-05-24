<?php

    echo (5 && 7) ? 'yes<br>' : 'no<br>';

    $a = 5 || 7;

    echo $a ? '$a=true<br>' : '$a=false<br>';

    $b = 5 or 7; // and, or 優先權比 = 還低
    //var_dump()可以把類型和變數數值顯示出來
    var_dump($b);
    echo "<br>";
    
    echo "\$b=$b<br>";
    $c = (5 or 7);
    var_dump($c);
    echo "<br>";

    echo "\$c=$c<br>";
?>