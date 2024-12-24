<!-- Require : To show the error is a fetal error and stop the execution of code  -->
<!-- Files is not Open  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>

    <?php
        require 'index1.php';
    ?>

 <!-- // require_once :- if the statement is executed multiple times. -->
<!-- If the file is missing, it throws a fatal error and stops execution, just like require. -->

    <?php
        require_once 'index1.php';
    ?>
    
</body>
</html>