<?php
$server = "mongodb+srv://paulaemy:MATPET2007@m001-basics-ivutt.mongodb.net/video?retryWrites=true";

    // Connecting to server
    $c = new MongoDB\Client( $server );

    if($c->connected)
        echo "Connected successfully";
    else
        echo "Connection failed";
?>