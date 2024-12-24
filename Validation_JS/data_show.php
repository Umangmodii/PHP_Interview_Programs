<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Show - PHP</title>
</head>
<body>

<?php
    // Debugging the POST request
    echo '<pre>';
    print_r($_POST);  // Check if the data is coming through
    echo '</pre>';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ensure the data is being received correctly
        if (isset($_POST['name']) && isset($_POST['pincode']) && isset($_POST['address'])) {
            $name = $_POST['name'];
            $pincode = $_POST['pincode'];
            $address = $_POST['address'];

            // Display the received data
            echo "Name is: " . $name . "<br>";
            echo "Pincode is: " . $pincode . "<br>";
            echo "Address is: " . $address;
        } else {
            echo "Some data is missing.";
        }
    } else {
        echo "No data received.";
    }
?>

</body>
</html>
