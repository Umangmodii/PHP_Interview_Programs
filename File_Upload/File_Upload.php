<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <?php
        $file_path = "C:/Xampp 2/htdocs/PHP_Practise_Code/Image";
        $file_path = $file_path.basename($_FILES['Files_Upload']['name']);

        if(move_uploaded_file($_FILES['Files_Upload']['tmp_name'],$file_path))
        {
            echo "File is Successfully Uploaded..";
        }

        else
        {
            echo "File is Not Uploaded..";
        }
    ?>
    
</body>
</html>