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
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br>";
    }
    ?>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<script>console.log($i)</script>";
    }
    ?>

    <table border="1">
        <?php for ($i = 1; $i < 10; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j < 10; $j++) { ?>
                    <td><?= $i * $j ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>