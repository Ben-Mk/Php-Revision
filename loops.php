<?php
/* for($x = 0; $x <= 10; $x++){
    echo "Number {$x} <br>";
} */

/* $x = 1;
while($x <= 15){
    echo "Number {$x} <br>";
    $x++;
}; */

$posts = ['First Post', 'Second Post', 'Third Post'];
/* for($x = 0; $x <= count($posts); $x++){
    echo $posts[$x];
} */

/* foreach($posts as $index => $post){
    echo "$index - $post <br>";
} */

$person = [
    'first_name' => 'Ben',
    'last_name' => 'Mk',
    'email' => 'benmk@gmail.com',
    'age' => '21'
 ];

    foreach($person as $key => $value){
        echo "$key - $value <br>";
    }

    foreach($posts as $post){
        echo "$post <br>";
    }