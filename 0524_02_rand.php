<?php
    echo getrandmax() . "<br>";
    echo rand() . "<br>";
    echo rand(1, 6) . "<br>";
    $c = rand(0, 16777216); //true color 256 * 256 *256
    echo $c . "<br>";

    //'0補字補0 6總共6位數 X以16進位塞後面變數
    printf("#%'06X", $c);
?>