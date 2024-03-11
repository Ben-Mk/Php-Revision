<?php
$fruits = ['apple', 'orange', 'pear'];

//Get length
//echo count($fruits);

//Search array
//var_dump(in_array('apple', $fruits));

//Add to array 
$fruits[] = 'grape';
array_push($fruits, 'banana', 'pineapple');
array_unshift($fruits, 'mango');

//Remove from array
array_pop($fruits);
array_shift($fruits);
//unset($fruits[3]);
//print_r($fruits);

//Split into chunks
$chunked_array = array_chunk($fruits, 3);
//print_r($chunked_array);

//Combining arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1,...$arr2];
//print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];
$c = array_combine($a, $b);
//print_r($c);

$keys = array_keys($c);
//print_r($keys);

$flipped = array_flip($c);
//print_r($flipped);

$range = range(1, 10);
//print_r($range);

$nums = array_map(function($num) {
    return "Number {$num}";
}, $range);
//print_r($nums);

$filterNums = array_filter($range,fn($num) => $num <= 10);
//print_r($filterNums);

$sum = array_reduce($range, fn($carry, $number) => $carry + $number);
echo $sum;