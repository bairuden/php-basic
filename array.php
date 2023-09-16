<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="file5.php" method="GET">
        <level>password:</level>
        <input type="password" name="pass">
    </form>
</html>
<?php

/**
 * This function will print a new line.
 */
function br()
{
    echo "<br>";
}

//index array/automatically array
$hobby = array();
$hobby[0] = "play";
$hobby[1] = "sing";
$hobby[2] = "eating";
//mone take na
//array r index print kora jai
//array print kora jai na
br();
//manually array
$alu = array("ly" => 10, "lm" => 15, "ll" => 12);
echo $alu["lm"];
br();
//associative array_valugulu o assign kore dilam
//lm index echo korle oitar valu ta show korbe
$alu = array("ly" => 10, "lm" => 15, "ll" => 12);
echo $alu["ly"];// is this line possible?
br();
$count = "hello";
$house = array("li", "lm", "li");
/**
 * $count int
 * $house array
 * int ar array jog kora jay na.
 */
$count ." ". $house[2];// string ar array jog kora jay na.
//aikane koita information ase count kora jabe
//aktu tik kore den
$name = array("li" . "la", 18);
foreach ($name as $value) {
    echo $value;
    br();
}
//sobgulu information aksathe show korar jonno foreach use korsi
$info = array(
    array("li", 15, "netrakona"),
    array("ly", 45, "metrokona"),
    array("lm", 18, "yetrakona")//resultgulu te space cassi//bujsi
);
for ($x = 0; $x < 3; $x++) {
    for ($y = 0; $y < 3; $y++) {
        echo $info[$x][$y];//result eikhane print hosse.
        echo ' ';//result er por ekta space print korlam.
    }
    br();
}

//multidimentional array r sob information daykar jonno loop er bitore loop calailam
//tai nested loop use korlam
//y er valu 0 hole 3 take small_y++ 0array r 1 number value show korbw
//eibabe jokon y r valu 3 take boro hoia jabe tokon x loop e enter korbe
//x loop e o same kahini hobe
//index gulur maddome sob valugulu shpw korte parbo
br();
echo 'printing using foreach:';//agei bole dissi?yes
br();
$school = array("mi", "ma", "my");
foreach ($school as $key => $value) {
    echo $key . "  " . $value; 
    //add space in  between key and value. new line after every result.
    br();
}
//br keno katlen?
br();
echo 'printing array: ';//why use this? for information purpose.
br(4);// ami cai ekbar function call kore 4 line break dibo.//
// kivabe somvob?
//array r key and value show korbe
$versity = array("ki", 18, "lima");
$count = count($versity);
for ($x = 0; $x < $count; $x++) {
    echo $versity[$x];
    echo '   ';
}
br()
//tik kore den
//eikha ne ki print korte cassen?
//array r information gulu dakte cassi
//for loop er maddome count korte parbo sobgulu value
//this is function array
?>