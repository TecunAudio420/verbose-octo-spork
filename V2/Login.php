<!DOCTYPE html>
<?php
$cookie_name = "Testcookiename";
$cookie_value = "Testcookievalue";
setcookie($cookie_name, $cookie_value, ); 
?>
<html>
<body>


<h3>NASA API login:</h3>

<form action="landing.php" method="post">
    User-name: <input type="text" name="username"><br /> 
    Pass-word: <input type="password" name="password"><br />
    <input type="submit">
</form>
