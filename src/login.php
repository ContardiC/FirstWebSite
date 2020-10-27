<?php
session_start(); // sempre la prima funzione
$email=trim($_POST['email']);
// per eliminare gli spazi bianchi prima e dopo la stringa
$password=trim($_POST['password']);

// echo $email."<br>".$password;
$file=fopen("data/users.txt","r") or die("Unable to open file!");
$i=0;
while(!feof($file)){
    $arr[$i]=trim(fgets($file));
    $i++;
}
//print_r($arr);
$i=0;
$find=false;
while($i<count($arr) && $find==false){
    //echo $arr[$i];
    if($arr[$i]==$email && $arr[$i+1]==$password){
        $_SESSION['email']=$email; // un campo univoco 
        // esempio email o ID
        $find=true;
        header("Location: riservata.php");
    }
    $i++;
}
if(!$find){
    echo "Credenziali errate";
}
// controllo credenziali
// se le credenziali sono corrette
//email && password checked





/*

*/
fclose($file);