<?php
//echo 'hello get and post';
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Ben&age=21">CLICK</a>

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