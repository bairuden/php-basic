<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>school</h1>
    <form>
        <select>
            <option value="" id="">primary</option>
            <option value="" id="">high</option>
        </select>
    </form>
    <?php
    /**
     * The function will print ar new line
     */
    function br()
    {
        echo "<br>";
    }
    $string = "This is a string";
    $strlen = strlen($string);
    echo $strlen;
    br();
    $string = "This is a string";
    $strpos = strpos($string . "is", 4);
    echo $strpos;
    br();
    $string = "This is a string";
    $pregmatch = preg_match("/is/", $string);
    if (preg_match("/is/", $string)) {
        echo "match";
    } else {
        echo "not match";
    }
    br();
    //str_replace,,,akta sentese er kunu word er jaigai onno word bosanu
    $string = "This is a string";
    $str_replace = str_replace("is", "are", "$string"); //is chanange korbo,ei jaigai are dilam
    echo $str_replace;
    br();

    $string = "This is a string";
    echo strtolower($string);
    br();
    echo strtoupper($string);
    br();
    //capital letter er sentese ke small letter kore,small ke capital
    $string = "This is a string";
    $substrreplace = substr_replace("$string", "it", 5, 3); //$string er modde replace korbo,it bosabo,5 letter take suru korbo,3ta letter nibo
    echo $substrreplace;
    br();
    $string = "This is a string";
    $wordcount0 = str_word_count($string, 0); //0 int typer result asbe
    $wordcount = str_word_count($string, 2); //1,2 aigula dile associative array result asbe
    print_r($wordcount0);
    // echo $wordcount;
    br();
    echo print_r($wordcount); //array result asbe
    br();
    $string = "This is a string";
    $Shuffle = str_shuffle($string); //sentense alumalu asbe,jotobar reload dibo totobar asbe
    echo "$Shuffle";
    br();
    $string = "This is a string";
    $substr = substr($string, 0, 3); //0 psition take start korlam,3ta nilam
    echo $substr; //sentense take kisu charecter kete naoua hobe
    br();
    $string = "This is a string";
    $strreverse = strrev($string);
    echo "$strreverse"; //ulta asbe sentense
    br();
    $string = 'This is <img src="#"> string';
    $htmlentities = htmlentities($string);
    echo 'without htmlentities:';
    br();
    echo $string;
    echo 'with htmlentities:';
    echo $htmlentities; //sentense er bitore html er kisu likle ta show korbe na
    br();
    $string = "sentense er bitore html er kisu likle ta show korbe na";
    $wordcount1 = str_word_count($string,2);
    print_r($wordcount1);

    ?>
</body>

</html>