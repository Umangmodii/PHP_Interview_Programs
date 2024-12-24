<!-- Session is used for Store the Session is or Name and pass the one page to
 another page and use the server side  -->

<!-- Syntax :=> $_Session['username'] -->

 <?php
    session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Create</title>
 </head>
 <body>

    <?php

        $_Session["user"] = "Umang";
            echo "Session info are set successfully!" . "</br>";

    ?>
        <a href = "Session2.php"> Visit Next Page  </a>
    
 </body>
 </html>