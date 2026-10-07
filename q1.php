<?php
echo "<br>";
echo "<form method='post'>";
echo "<h3>register form</h3>"
// echo "<lable>username: </lable>";
// echo "<input type='text' name='username'>";
echo "<lable>email: </lable>";
echo "<input type='text' name='email'>";
echo "<lable>password: </lable>";
echo "<input type='password' name='password'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

// session_start();

// $username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

echo "$email";
echo "$password";

// $_SESSION["username"] = $username;
// $_SESSION["email"] = $email;
// $_SESSION["password"] = $password;
// print_r($_SESSION);
?>