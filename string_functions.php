<?php
$string = 'hello world';

//length of the string
echo strlen($string);

//firts occurence position of the string 
echo strpos($string, 'l');

//reverses the string
echo strrev($string);

//converts the whole of the string to lower case
echo strtolower($string);

//converts the whole string to upper case
echo strtoupper($string);

//converts the first word of each string to upper case
echo ucwords($string);

//replace the whole string
echo str_replace('World','Hello', $string);

//Returns a portion of the string
echo substr($string, 5);
echo substr($string, 2, 1);

//Start with
if(str_starts_with($string, 'hello')){
    echo 'YES';
}

//Ends with
if(str_ends_with($string, 'rld')){
    echo 'YES';
}

