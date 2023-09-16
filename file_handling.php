<?php
$file = fopen("info.txt", "r"); //fopen use kore file open kori,r dia bujai read mode e file open kortesi
echo 'info.txt file opened.<br>';
echo fread($file, filesize("info.txt")); //fread=file read kora jabe,filesize function use korlam jar size hobe info.txt er soman
echo '<br>';
fclose($file); //file close korlam
echo 'info.txt file close.<br>';


$file = fopen("info.txt", "r");
echo 'info.txt file opened.<br>';
echo fgets($file); //fgets dia file er single line show kore,only first line
fclose($file); //file close korte hobe noito file colte takbe
echo 'info.txt file close.<br>';

echo 'info.txt file opened.<br>';
$file = fopen("info.txt", "r");
//feof = file end of file
// feof return kore file er sesh porjonto posaise kina.
while (!feof($file)) { //feof mane file er ses porjonto sobgulu line show korbe
    echo fgets($file); //akta kore show korbe
}
fclose($file);
echo 'info.txt file close.<br>';

$file = fopen("info.txt", "r"); //fopen dia file open kora jai
while (!feof($file)) { //file er ses porjonto show korbe tai for loop use korte hobe
    echo fgetc($file); //single character show korbe
}
fclose($file);

$file = fopen("info.txt", "w"); //jodi file create kora na take
$text = "php video";
//$write variable er value kothay set korsen?//korinai to
//thik koren.bujaia den 
echo fwrite($file, $write); //fwrite dia file e php er sahajje new txt add kora jai
fclose($file);
