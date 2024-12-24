<!-- fwrite() used function -->
<!-- w mode -->

<?php
    $filename = "data.txt";
    $open_files = fopen($filename,"w");

    fwrite($open_files,"I am Good!");
    fclose($open_files);

    echo "File is successfully Write..";
?>