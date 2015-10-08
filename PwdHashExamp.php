<?php
$pass= $_POST['pass'];
  
$pass = hash('sha512', $pass);
$pass = hash('sha512', $pass);

$pass = md5($pass);
$pass = md5($pass);

$pass = hash('sha256', $pass);
$pass = hash('sha256', $pass);

$pass = md5($pass);
$pass = md5($pass);

$pass = hash('sha512', $pass);
$pass = hash('sha512', $pass);

echo $pass;
?>



