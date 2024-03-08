<?php
$age = 16;

/* if($age >= 18){
    echo 'Your are old enough to vote';
} else{
    echo 'Sorry you not old enough';  
} */

$date = date('H');

/* if($date < 12){
    echo 'Good Morning'; 
} else if($date < 17) {
    echo 'Good Afternoon';
}
else {
    echo 'Good Evening';
} */

/* $posts = [];

if(empty($posts)){
    echo 'No Posts';
}else {
    echo $posts[0];
} */

$char = 'kung lao';

switch($char){
    case 'liu kang':
        echo 'Fire Lord';
        break;
    case 'kung lao':
        echo 'Hat Spinter';
        break;
    case 'jonny cage':
        echo 'Karate Actor';
        break;
    default:
    echo 'Did not select a player';
}