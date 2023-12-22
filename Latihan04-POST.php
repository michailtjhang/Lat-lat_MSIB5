<form method="POST">
    <label for="">Username : </label>
    <input type="text" name="username"> <br>

    <label for="">Password : </label>
    <input type="password" name="pass" > <br>

    <input type="submit" name="login" value="login" id="">
</form>

<?php 

$username = $_POST ['username'];
$password = $_POST ['pass'];

$login = $_POST ['login'];

if(isset($login)){
    echo 'username : ' . $username . '<br> password : ' . $password;
}

?>

