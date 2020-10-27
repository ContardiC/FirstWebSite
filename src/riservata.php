<?php
session_start();
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    echo "Ciao ".$email;
    // contenuto visibile all'utente loggato
}else{
    echo "Non hai permessi per visualizzare questa pagina";
}