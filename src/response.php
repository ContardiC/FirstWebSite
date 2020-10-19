<?php

// TODO: risposta al questionario HTML


$username=$_POST["username"];
$psw=$_POST["psw"];
$comment=$_POST["comment"];
$gender=$_POST["gender"];
if(isset($_POST["sport_1"])){
    echo "Ti piace :".$_POST['sport_1']."<br/>";
}
if(isset($_POST["sport_2"])){
    echo "Ti piace :".$_POST['sport_2']."<br/>";
}

echo "Hai inserito questo nome utente: " . $username . "<br/>";
echo "Hai inserito questa password: " . $psw . "<br/>";
echo "Hai inserito il genere: " . $gender . "<br/>";
echo "Hai inserito questo commento: " .$comment;