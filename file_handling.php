<?php
//echo "hellow file handling";
$file = 'extras/users.txt';

if(file_exists($file)){
    //echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}else{
    $handle = fopen($file, 'w');
    $contents = 'Ben' . PHP_EOL . 'Mike' . PHP_EOL . 'John';
    fwrite($handle, $contents);
    fclose($handle);
}