<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD OPeration</title>
</head>
<body>

    <form name = "myForm" method = "POST" action = "">

    <h2> Student Details </h2>

   <table>
    <tr>
       <th> <label> Student Name </label> </th>
      <td>  <input type = "text" name = "name" class = "form-control"> </td>
    </tr>


    <tr>
       <th> <label> Student City  </label> </th>
       <td> <input type = "text" name = "city" class = "form-control"> </td>
    </tr>

    <tr>
       <th> <label> Student Address  </label> </th>
       <td> <input type = "text" name = "address" class = "form-control"> </td>
    </tr>

    <tr>
        <th> <input type="submit" name = "submit" value = "Submit"> </th>
    </tr>

</table>

    <a href = "Student_Display_Data.php"> Display Data  </a>    

    </form>
    
</body>
</html>

<?php

    include 'Connect_Database.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $address = $_POST['address'];
    
        $stmt = $connection->prepare("INSERT INTO stud_data (name, city, address) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $city, $address);
    
        if ($stmt->execute()) {
            echo "Data Inserted Successfully";
        } else {
            die("Error: " . $stmt->error);
        }
        
        $stmt->close();
        $connection->close();
    }
?>