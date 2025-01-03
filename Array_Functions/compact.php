<!-- To Create the Array and store the Variables -->
<?php

    $winter = 3;
    $summer = 6;
    $monsoon = 9;

    $session = array("winter","summer");
    $result =  compact("monsoon",$session);
    print_r($result);

?>