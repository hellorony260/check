<?php
$name = 'Hello world';
// echo strlen($name);





function sum($x, $y)
{
    $z = $x + $y;
    echo $z;
}
// sum('40', '5');


function greetings($name)
{
    echo "hi $name!!";
}
// greetings('Rony');


// $n = "12";
// if (is_numeric($n)) {
//     echo 'The is numeric';
// } else {
//     echo 'This is not numeric';
// }

function add($a, $b = 10)
{
    return  $a + $b;
}
// echo add(15, 20);/

(function () {
    echo "hello from anonymus";
})();

for ($i = 0; $i <= 10; $i++) {
    echo " $i: Hellow, Rony Here<br> <br>";
}

function nemta($n)
{
    for ($i = 1; $i <= 10; $i++) {
        echo ($n . " x " . $i . " = " . $n * $i . "<br> <br>");
    }
}
nemta(25);



$n = 10;

for ($i = 1; $i <= 10; $i++) {
    echo ($i . " x " . $n . " = " . $i * $n . "<br>");
}
