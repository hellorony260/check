<?php
$arr = ['akib', 'zaman', 'hadi', 'molla', 'hello', 'world'];
// echo $arr[2];

// echo count($arr);
for ($i = 0; $i < count($arr); $i++) {
    // echo "$arr[$i] <br>";
}

// foreach ($arr as $arr_item) {
//     echo $arr_item . "<br>";
// }
//  assosiative array 
$person = [
    'name' => 'Hello world',
    'age' => 25,
    'mobile' => "9998546",
    'address' => 'Magura'
];
// echo $person['address'];
// print_r(array_values($person));

foreach ($person as $person_key => $person_value) {
    // echo "$person_key : $person_value <br>";
    // echo $person_key . "<br>";
}


$name = ['akib', 'zaman', 'hadi'];
$age = [20, 15, 18];
$address = ['Magura', 'Khulna', 'Bangladesh'];
$new_arr = array_combine($name, $age);
// print_r($new_arr);

foreach ($new_arr as $key => $value) {
    // echo "$key : $value <br>";
}

$numbers = [9, 5, 1, 15, 3];
sort($numbers);
// echo ($numbers);


$stdent = ['Rony', 'layeb', 'Taniya'];
$Id = ['102', '103', '104'];
// $new_arr = array_combine($stdent, $Id);
// print_r($new_arr);



$developers = ['layeb', 'tania', 'rony'];
array_push($developers, 'akash');

// array_pop($new_arr);
// print_r($developers);
// echo $developers;

// print_r($developers);
// array_pop($developers);
// print_r($developers);




$developers = ['layeb', 'tania', 'rony'];
// array_unshift($developers, 'hello'); // insert in first 
// array_shift($developers); //remove from first 
// print_r($developers);



$numbers = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// print_r($numbers[0]);

// echo $numbers[0][1];
// echo $numbers[2][2];

$person = [
    ['name' => 'Hello world'],
    ['age' => 25],
    ['address' => 'Magura']
];
echo $person[2]['address'];
