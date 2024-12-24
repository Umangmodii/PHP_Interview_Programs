<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Jquery </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<input type="text" id="name" placeholder="Enter your name">
<input type="button" name="submit" id="submit" value="Submit">
<p id="response"></p>

<script>

    $(document).ready(function(){
        $('#submit').click(function(){
            var name = $('#name').val();

            $.ajax({
                url: 'process.php',
                type: 'POST',
                data: { name: name },

                success:function(data){
                    $('#response').html(data);
                },

                error:function(error,data){
                    alert("Data is not send!");
                }
            });
        });
    });

</script>
    
</body>
</html>

