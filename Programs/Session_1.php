<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session - PHP</title>
</head>
<body>

<?php
    $_SESSION["User"] = "Umang";
        echo "Session is start."; 
?>

<a href = "Session_2.php"> Click Here </a>
    
</body>
</html>