<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload - PHP</title>
</head>
<body>

    <form name = "myForm" action = "Send_Data.php" method = "POST" enctype="multipart/form-data">

        <tr>
            <th> Select the File :  <th>
            <td> <input type = "file" name = "myfile"> </td>
        </tr>

        <td> <input type = "submit" name = "Submit" value = "Submit"> </td>

    </form>
    
</body>
</html>