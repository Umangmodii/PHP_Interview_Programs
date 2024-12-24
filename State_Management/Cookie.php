<!-- Cookie :=> Cookie is Create the Server side and stored the client side. and client can be send
 the request to the server and receive can be server side. -->

<!-- Syntax :=> setcookie(name,value);
                $_Cookie['user name'] -->

<?php

    setcookie("User","Umang");

    if(!isset($_COOKIE['User']))
    {
        echo "Sorry, Cookie is Not Found!";
    }

    else
    {
        echo "Cookie is Stored, " . $_COOKIE['User'];
    }
?>