<?php
    $onoff = $_GET['onoff'];

    if ($onoff == "OFF")
        $output = `gpio write 0 0`;
    else
        $output = `gpio write 0 1`;
    
    echo "LED state changed to: $onoff";
?>