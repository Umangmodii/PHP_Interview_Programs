<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Operation</title>
</head>
<body>

    <?php

        include 'Connect_Database.php';

        $id = $_GET['deleteid'];

        $sqli = "Delete From stud_data where id = $id";

        $result = mysqli_query($connection,$sqli);

        if(($result))
        {
            echo "Data is Deleted Successfully!";
        }

        else
        {
            echo "Data is Not Deleted!";
        }
    ?>
    
</body>
</html>