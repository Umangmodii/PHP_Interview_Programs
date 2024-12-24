<?php
    $servername = "localhost";
    $hostname = "root";
    $password = "";
    $database = "Students";

    $connection = mysqli_connect($servername,$hostname,$password,$database);

    if(!$connection)
    {
        echo "Unable to Connect Database connection!" . mysqli_connect_error();
    }

    else
    {   
      // echo "Database is Successfully Connect.";
    }
