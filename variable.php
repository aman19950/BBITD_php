<!-- 
    Integers − are whole numbers, without a decimal point, like 4195.
    Doubles − are floating-point numbers, like 3.14159 or 49.1.
    Booleans − have only two possible values either true or false
    Strings − are sequences of characters, like 'PHP supports string operations.'
 -->
<?php 
    $int_num = 12345;
    echo $int_num;
    $int_sum = -12345 + 12345;
    echo "<br>";
    echo $int_sum;

    $string_1 = "welcome to\nthe aptron";
    $string_2 = 'this is php training'."\n";
    echo $string_1;
    echo gettype($string_1);

    //constant
     define("int_num", 50);

     echo int_num;


    $cars = array("Volvo","BMW","Toyota");
var_dump($cars);
    ?>