<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - JS</title>
</head>
<body>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $age = $_POST['age'];

            echo "Name is : " . $name . "<br>";
            echo "Age is : " . $age;
        }
        else{
            echo "Invalid Data Request.";
        }
    ?>
    
</body>
</html>