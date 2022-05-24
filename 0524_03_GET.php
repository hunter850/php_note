<?php
    //html表單未定義傳送方式預設就是GET
    echo $_GET['a'];
    echo "<br>";
    //若變數a尚未設定過 則賦b之值為0 否則以a原本值賦予b
    $b = isset($_GET['a']) ? $_GET['a'] : 0;
    echo $b;
?>