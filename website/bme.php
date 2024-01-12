<?php
   $raw = `/var/www/html/website/bme/bme280`;
   $deserialized = json_decode($raw, true);
?>
   <body> 
    <p>Temperature reading: <?=$deserialized["temperature"]?></p>
    <p>Pressure reading: <?=$deserialized["pressure"]?></p>
    <p>Altitude reading: <?=$deserialized["altitude"]?></p>
   </body> 