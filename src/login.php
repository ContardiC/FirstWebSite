<?php

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
fclose($file);