<?php
//echo 'hello get and post';
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    echo $age;
}

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
    <br>
    <label for="age">Age: </label>
    <input type="text" name="age">
    <br>
    <input type="submit" value="Submit" name="submit">
</div>
</form>