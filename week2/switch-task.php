<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Task</title>
</head>
<body>
    <?php
        // M.Rossiter - 2022. Week 2 php exercises on my city: Conditional statements, switch task solution
        $username = "aadmin"; // decalre and assign variable
 
        // swicth statement to determine value of variable
        switch($username){
            case "admin": 
                echo "Welcome you have admin rights to the system"; // message if true
                break; // break out the swicth statement
            default: // if the previous case is not met, use the default fail safe
                header("Location: http://www.bbc.co.uk"); // use php header function to redirect to bbc website
                break;
        }

    ?>
</body>
</html>