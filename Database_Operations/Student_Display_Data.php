<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data - Student</title>
</head>
<body>

<?php
        include 'Connect_Database.php';

        $sqli = "Select * from stud_data";

        $result = mysqli_query($connection,$sqli);

        if($result)
        {
           echo "<table>
                <tr>
                    <th> Id </th>
                    <th> Username </th>
                    <th> City </th>
                    <th> Address </th>
                    <th> Update </th>
                    <th> Delete </th>
                </tr>";
            
        

        while($rows = mysqli_fetch_array($result))
        {
            $id = $rows['id'];
            $name = $rows['name'];
            $city = $rows['city'];
            $address = $rows['address'];

            echo "<tr>
                <td> $id </td>
                <td> $name </td>
                <td> $address </td>
                <td> 
                    <button> <a href = 'Student_Update_Data.php?Update=$id'> Update  </a> </button> 
                </td>
                <td>
                    <button> <a href = 'Student_Delete_Data.php?deleteid=$id'> Delete  </a> </button> 
                </td>
                  </tr>";
        }

           echo "</table>";
        }
?> 
    
</body>
</html>