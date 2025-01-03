<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX - PHP - JS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<form id="dataForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <button type="button" id="submitButton">Submit</button>
</form>
    <div id="response"></div>

<script>

        document.getElementById("submitButton").addEventListener("click", function() {
            var name = document.getElementById("name").value; 
            var age = document.getElementById("age").value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "process.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("response").innerHTML = xhr.responseText;
                }
            };

            xhr.send("name=" + name + "&age=" + age); 
        });

</script>
    
</body>
</html>