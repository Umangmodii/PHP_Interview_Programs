<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload - PHP</title>
</head>
<body>

    <form name = "myForm" action = "File_Upload.php" method="POST" enctype="multipart/form-data">
        <label> Uplaod the Files :  </label>
        <input type = "file" name = "Files_Upload">
        <br>
        <input type="submit" name = "Submit">
    </form>

</body>
</html>