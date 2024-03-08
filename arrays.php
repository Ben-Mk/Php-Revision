<?php
 $numbers = [1,22,33,44];
 $names = ['ben', 'liam', 'michael', 'dan'];

 //Associative Arrays

 $hex = [
    'red' => '#f00',
    'blue' => '#0f0'
 ];

 //echo $hex['blue'];

 $person = [
    'first_name' => 'Ben',
    'last_name' => 'Mk',
    'email' => 'benmk@gmail.com'
 ];

 //echo $person['first_name'];

 $people = [
    [
        'first_name' => 'Ben',
        'last_name' => 'Mk',
        'email' => 'benmk@gmail.com'
    ],

    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],

    [
        'first_name' => 'John',
        'last_name' => 'Vanderm',
        'email' => 'john@gmail.com'
    ]
    ];

 //echo $people[2]['last_name'];
 var_dump(json_encode($people));