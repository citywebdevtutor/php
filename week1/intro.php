<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to PHP</title>
</head>
<body>
    <!-- html comment -->
    <?php
        // M. Rossiter - 20222. PHP introduction week 1

        // single line comment
        # single comment

        /*
            block comment
            block comment

        */

        // php commands such as echo are not case sensitive
        echo "Hello World!"; 
        EcHo "Hello World 2!";
        ecHO "Hello World 3!";

       
        $name = "Mark"; // declare variable in php
        
        echo "My name is " . $name . "<br><br>"; // echo output back to screen using php and concatenate string with value of variable

        $colour = "blue"; // declare variable colour and assign with the string value blue
        
        // php variable names are case sensitive
        echo "The sky is " . $colour . "<br>";  // correct
        echo "The sky is " . $COLOUR . "<br>";  // error
        echo "The sky is " . $coLOUR . "<br>";  // error
    ?>
</body>
</html>