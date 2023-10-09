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
        $name = "Gustavo";
        $lastName = "Guanabara"; // Camel Case
        const COUNTRY = "United States Of America";
        
        
        $name =  "Rafael";
        $lastName = "Silva";
        
        $salary_of_name = 2500.75; // Snake Case

        echo "My pleasure, $name $lastName! You live in ". COUNTRY, "...<br>";
        print "Is true that your name is $name?<br>";
        print "Your monthly salary is $salary_of_name?"
    ?>
</body>
</html>