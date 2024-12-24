<!-- include only generates a warning, i.e., E_WARNING, and continue the execution of the script. -->
<!-- Advantage : Code Reusable -->
<!-- When Files is Not Found to show the error in incorrect files or Not Found -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include - PHP</title>
</head>
<body>

    <h2> Include the files </h2>

    <?php
        include 'index.php'; // Warning
    ?>

    <?php
        include 'index.php'; // Warning
    ?>

    <!-- // include_once :- if the statement is executed multiple times. -->
    

    <?php
        include_once 'index.php';  
    ?>

    

</body>
</html>