<?php

$file = file_get_contents("count.txt", "w");
$visitors = $file;

echo "You've had $visitors visitors.";

$visitorsnew = $visitors+1;

$filenew = fopen("count.txt","w");
fwrite($filenew, $visitorsnew);

?>
