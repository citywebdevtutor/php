<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $pwd = htmlspecialchars($_REQUEST['pwd'], ENT_QUOTES, 'UTF-8');
        $pwdCheck = 'admin1234';

        if($pwd == $pwdCheck)
        {
            echo 'The password, ' . $pwd . ' exists.';
        }
        else
        {
            echo 'The password, ' . $pwd . ', does not exist.<br>';
            echo "<a href='login.php'>Try again</a>";
        }
    ?>
</body>
</html>