<?php
session_start(); // sempre la prima funzione


$file=fopen("data/users.txt","r") or die("Unable to open file!");
$i=0;
while(!feof($file)){
    $users[$i]['email']=trim(fgets($file));
    $users[$i]['password']=trim(fgets($file));
    $i++;
}
$i=0;
while($i<count($users)){
    echo $users[$i]['email']."<br>";
    echo $users[$i]['password']."<br>";
    $i++;
}




/*

*/
fclose($file);
