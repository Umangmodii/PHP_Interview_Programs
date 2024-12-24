<!-- fopen to File is Open -->
<!-- fread is File is reading only -->
<!-- r mode -->

<?php

    $filename = "data.txt";
    $open_files = fopen($filename,"r");

    $contents = fread($open_files,filesize($filename));

    echo $contents;

?>