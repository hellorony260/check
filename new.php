<?php

$numbers = [4, 5, 8, 1, 3];
// echo array_sum($numbers);

$person = [];
// var_dump($person);
$n = 4;
// var_dump($n);


$person = [];

// print_r($person);
array_push($person, 'Hello world');
array_push($person, 'php');

// print_r($person);
$language = [];

$framework = ['react', 'laravel', 'go', 'vue'];

for ($i = 0; $i < count($framework); $i++) {
    // array_push($language, $framework[$i]);
    $language[] = $framework[$i];
}
// print_r($language);




$language = [];

$framework = ['react', 'laravel', 'go', 'vue'];


foreach ($framework as $item) {
    // echo $item . PHP_EOL;
    // echo $language[] = $item . PHP_EOL;
}

$name = ' Hello ';
// echo trim($name);


$names = ['php', 'laravel', 'go', 'python', 'c', 'c++', 'c#'];

// $slice = array_slice($names, 0, 3);
// print_r($slice);
// $n = ['hello'];

// array_splice($names, 0, 2, 'hello world');

// print_r($names);



$names = ['php', 'laravel', 'go', 'python', 'c', 'c++', 'c#'];

// if (in_array('hello', $names)) {
//     echo 'find';
// } else {
//     echo 'not fund';
// }




$name = ['akib', 'zaman', 'hadi'];
$age = [20, 15, 18];
$address = ['Magura', 'Khulna', 'Bangladesh'];
// $new_arr = array_combine($name, $age); for two array

// print_r($new_arr);
// print_r(array_merge($name, $age, $address)); // for multiple array

// print_r($thired);



// $n = [6, 5, 1, 7, 2];
// sort($n);

// print_r($n);
