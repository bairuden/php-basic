<?php
/**
* The function will be print in new line
*/
function br(){
    echo "<br>";
}
$age = '{"lima"=>20,"lyma"=>,"limu"=>60,"liim"=>20}';
echo json_encode($age); //it shows how encode assoociative array into json object
br();
$cars = array("BMW", "toyota");
echo json_encode($cars); //shows how encode index array into json object```` 
br();
$jsonbi = '{"lima":10, "lamu":10,"lama":11"}'; //decodes the json data into php object
var_dump(json_decode($jsonbi));
$jsonbi = '{"lima":10, "lamu":10,"lama":11"}'; //decodes the json data into php object
var_dump(json_decode($jsonbi));
$name = "Lima";
$Receiver = "Laila";
$Sender = "Laima";
$jsonbs = '{"li":10,"lm":12,"ly":13}';
$obj = json_decode($jsonbs);
echo $obj->li; //acess value from php object
br();
echo $obj->lm;
br();
echo $obj->ly;
br();
$jsonbs = '{"li"=>10,"lm"=>12,"ly"=>13}';
$arr = json_decode($jsonbs, true);
echo $arr["li"];
br();
echo $arr["lm"]; //how acess value from associative array
br();
echo $arr["ly"];
br();
$jsonbs = '{
"li" => 10,
"lm" => 12,
"ly" => 13
}';
$obj = json_decode($jsonbs, true);
echo $obj["li"];
br();
echo $obj["lm"];
br();
echo $obj["ly"]; //how acess value from associative array
br();
$jsonbs = '{"li":10,"lm":12,"ly":13}';
$lu = json_decode($jsonbs, true);
foreach ($lu as $key -> $value) { //how to forloop through php objrct

    echo $key . "" . $value;
}
br();
    $jsonbs = '{
        "li" => 10,
        "lm" => 12,
        "ly" => 13
        }';
    $arr= json_decode($jsonbs, true);
    foreach ($arr as $key -> $value) { //show how to forloop through the associative array
        echo $key . "" . $value;
    }
    br();
?>