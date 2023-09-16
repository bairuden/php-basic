<?php
$file = fopen("info.txt","R");
echo fread($file , filesize("info.txt"));
fclose($file);

$file = fopen("info.txt","R");
echo fgets($file , filesize("info.txt"));
fclose($file);

$file = fopen("info.txt","R");
while (!feof($file)){
    echo fgets($file);
}
fclose($file);
$file = fopen("info.txt","R");
while (!feof($file)){
    echo fgetc($file);
}
fclose($file);
?>