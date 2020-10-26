<?php

$email=$_POST['email'];
$password=$_POST['password'];
// echo $email."<br>".$password;
$file=fopen("data/users.txt","a") or die("Unable to open file!");
$str=$email."\n".$password."\n";
fwrite($file,$str);
print("L'utente è stato registrato correttamente");
fclose($file);
?>
