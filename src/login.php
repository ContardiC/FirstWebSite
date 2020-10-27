<?php
session_start(); // sempre la prima funzione
$email=$_POST['email'];
$password=$_POST['password'];

// echo $email."<br>".$password;
$file=fopen("data/users.txt","r") or die("Unable to open file!");
$i=0;
while(!feof($file)){
    $arr[$i]=fgets($file);
    $i++;
}
//print_r($arr);
$i=0;
while($i<count($arr)){
    echo $arr[$i];
    $i++;
}
// controllo credenziali
// se le credenziali sono corrette
//email && password checked
$_SESSION['email']=$email; // un campo univoco 
// esempio email o ID

fclose($file);