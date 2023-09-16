<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>name</h1>
    <select name="" id="">
        <option value="" id="">lima</option>
        <option value="" id="">lyma</option>
        <option value="" id="">lyza</option>
        <option value="" id="">lily</option>
    </select>
    <br>
    <?php
    $x = 10;
    $y = 3;
    $x = $x + $y;
    echo $x;
    echo '<br>';
    
    for ($a = 0; $a <= 15; $a += 5) {
        echo "hi <br>";
    }
    class phone
    {

        function phonemodel($number)
        {
            global $model;
            $model = $number;
            echo "this is $model<br>";
        }
    }
    $model = "samsung";
    $samsung = new phone;
    $samsung->phonemodel('s3');
    echo strlen("i love to eat pizza ");
    echo "<br>";
    echo str_word_count("i love to eat pizza");
    echo "<br>";
    echo strrev("i love to eat pizza");
    echo "<br>";
    echo strpos("i love to eat pizza","eat");
    echo "<br>";
    echo (pi());
    echo "<br>";
    echo (min(0, 1, 3, 5, 10));
    echo "<br>";
    echo (max(1, 2, 3, 4, 5));
    echo "<br>";
    $x = 13;
    echo $x;
    echo "<br>";
    define("a", "15");
    echo (a);
    echo "<br>";
    var_dump(a);
    $x = 2;
    $y = 3;
    echo $x ** $y;
    echo "<br>";
    echo ($x < $y);
    echo "<br>";
    echo "<br>";
    $x = "50";
    $y = 50;
    var_dump($x === $y);

    $x = 0;
    while ($x <= 5) {
        echo "the number is:$x <br>";
        $x++;
    }
    function name($name)
    {
        echo "this is function! $name <br>";
    }
    //name("lima");
    // single line comment

    /*
        this is
        multi
        line 
        comment
    */
    ?>
</body>

</html>