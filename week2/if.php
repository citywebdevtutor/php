<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
    <?php
        // M.Rossiter - 2022. Week 2 php exercises on my city: Conditional statements, if else if else 
        $colour = "green";
        // if statement will test the value of the variable colour for a match - true or false
        if ($colour == "green") {
            echo "<h6>You can safely walk across the road</h6>"; // if true, execute code block
        } 


        $widgets = 23;
        // if / else if / else statement will give greater control over the flow of the program based on the user input
        if ($widgets == 23) {
            echo "<h6>You have 23 widgets</h6>";
        }
        else if ($widgets > 23) {
            echo "<h6>You have more than 23 widgets</h6>";
        }
        // else should always be used as a fail safe (more user friendly, as bugs and errros do happen)
        else {
            echo "<h6>You have less than 23 widgets</h6>";
        }
      
        echo "<h6>I'm here</h6>"; // only 1 of the conditions for widgets will be true, when one is true php will break oput the code block and read the next line of code outside the code block
    ?>
</body>
</html>