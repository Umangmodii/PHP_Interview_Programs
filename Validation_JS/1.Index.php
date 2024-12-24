<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - JS</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<form name="myForm" onsubmit="return data()" method="POST" action="data_show.php">
    <table>
        <tr>
            <th> <label> Enter the Name </label> </th>
            <td> <input type="text" name="name" id="name"> </td>
        </tr>

        <tr>
            <th> <label> Enter the Pincode </label> </th>
            <td> <input type="text" name="pincode" id="pincode"> </td>
        </tr>

        <tr>
            <th> <label> Enter the Address </label> </th>
            <td> <input type="text" name="address" id="address"> </td>
        </tr>

        <tr>
            <td colspan="2"> <p id="info"></p> </td>
        </tr>

    </table>
    <input type="button" id="submit" value="Submit">
</form>

<!-- Javascript -->
<script>
    function data() {
        let name = document.forms['myForm']['name'].value;
        let pincode = document.forms['myForm']['pincode'].value;
        let address = document.forms['myForm']['address'].value;

        // Validation
        if (name == "") {
            alert("Name must be filled out");
            return false;
        }

        if (pincode == "") {
            alert("Pincode must be filled out");
            return false;
        }

        if (address == "") {
            alert("Address must be filled out");
            return false;
        }

        // If everything is valid, perform the AJAX request
        sendData(name, pincode, address);
        return false;  // Prevent the form from submitting
    }

    function sendData(name, pincode, address) {
    $.ajax({
        url: 'data_show.php',
        type: 'POST',
        data: {
            name: name,
            pincode: pincode,
            address: address
        },
        success: function(response) {
            $('#info').html(response);  // Display the response in the 'info' paragraph
            alert("Data has been sent successfully!");
        },
        error: function(xhr, status, error) {
            alert("Data is not sent successfully! Error: " + error);
            console.log(xhr.responseText);  // Log the response to check what went wrong
        }
    });
}

</script>

</body>
</html>
