<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
    // M.Rossiter - 2022. Week 2 php exercises on my city: Conditional statements, switch
    $colour = "red";
    
    // switch statement will test the value of the variable colour using case for a match - true or false
    switch ($colour) {
        case "red":                   // test value of variable if it is the value string value red
            echo "You can't drive";   // echo statement back to browser
            break;                    // break out the swicth statement as only 1 case can be a match
        case "yellow":
            echo "Get ready if safe to do so";
            break;
        case "green":
            echo "You can drive";
            break;
        default: // default is similar to else in an if statement and provides a fail safe if no other case is true
            echo "I don't know what colour it is";
            break;
    }
    echo "<br><br> Your outside the switch statement !"; // if a case is true the break will then jump out the switch statement to this line
    ?>
</body>
</html>