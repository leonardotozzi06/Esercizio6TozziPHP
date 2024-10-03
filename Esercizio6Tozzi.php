<?php

$N = 28;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Divisori di <?php echo $N; ?> (escludendo il numero stesso)</h1>
    <ul>
        <?php
        for ($i = 1; $i < $N; $i++) {
            if ($N % $i == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>