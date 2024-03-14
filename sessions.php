<?php
//echo 'hello get and post';
session_start();
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];
    if($username == 'ben' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /Php-Course/extras/dashboard.php');
    }else{
        echo 'Incorrect Login';
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="name">Username: </label>
    <input type="text" name="username">
    <br>
    <label for="age">Password: </label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="submit" name="submit">
</div>
</form>
