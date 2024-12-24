<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process - Jquery </title>
</head>
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];

        echo "Name is : " . $name . "<br>";
    }
?>
    
</body>
</html>