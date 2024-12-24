<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update OPeration</title>
</head>
<body>

    <form name = "myForm" method = "POST" action = "">

    <h2> Update Student Details </h2>

   <table>
    <tr>
       <th> <label> Student Name </label> </th>
      <td>  <input type = "text" name = "name" class = "form-control" value = "<?php echo isset($rows['name']) ? $rows['name'] : ''; ?>" </td>
    </tr>


    <tr>
       <th> <label> Student City  </label> </th>
       <td> <input type = "text" name = "city" class = "form-control" value="<?php echo isset($rows['city']) ? $rows['city'] : ''; ?>" </td>
    </tr>

    <tr>
       <th> <label> Student Address  </label> </th>
       <td> <input type = "text" name = "address" class = "form-control"  value="<?php echo isset($rows['address']) ? $rows['address'] : ''; ?>"> </td>
    </tr>

    <tr>
        <th> <input type="submit" name = "submit" value = "Submit"> </th>
    </tr>

</table>
    <a href = "Student_Insert_Data.php"> Insert Data  </a>    &nbsp;  &nbsp;
    <a href = "Student_Display_Data.php"> Display Data  </a>    

    </form>
    
</body>
</html>

<?php

$rows = [];
$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sqli = "SELECT * FROM stud_data WHERE id = $id";
    $result = $connection->query($sqli);

    if ($result->num_rows > 0) {
        $rows = $result->fetch_assoc();
    }
}

if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $address = $_POST['address'];

       $mysqli = "Update stud_data SET name = '$name', city = '$city', address = '$address' WHERE id = $id";
    
       if(mysqli_query($connection,$mysqli))
       {
            echo "Data is Updated";
       }

       else
       {
            echo "Data is Not Updated";
       }
    }
?>
