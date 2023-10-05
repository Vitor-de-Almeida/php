<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Example of PHP</h1>
    <?php 
        date_default_timezone_set(
            "America/Sao_Paulo" // GMT-3
        );
        echo "Today is " . date("d/M/y");
        echo "and the current hour is " . date("G:i:s");
    ?>
</body>
</html>