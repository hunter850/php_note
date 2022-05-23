<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Vitor";
        echo "hello $name" . "<br>";
        echo 'hello $name' . "<br>";

        "<br>";
        echo "hello ${name}123" . "<br>";
        echo "hello {$name}123" . "<br>";
        echo "hello \$name" . "<br>";
    ?>
    <?php
        echo "<ul>";
            for ($i = 0; $i < 10; $i++) {
                echo "<li><span>$i</span></li>";
            }
        echo "</ul>";
    ?>
    <?php
        for ($j = 0; $j < 10; $j++) {
            //類似backtick的功能 但結尾左邊不能有空白
            $a = <<<HDOC
                <h1>$j</h1>
HDOC;
            echo $a;
        }
    ?>
</body>
</html>