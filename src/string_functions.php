<?php

$str=" Hello World!    ";

// toglie gli spazi bianchi a destra e a sinistra della stringa
echo trim($str) . "<br>";
// toglie gli spazi bianchi a destra  della stringa
echo rtrim($str) . "<br>";
// toglie gli spazi bianchi a sinistra della stringa
echo ltrim($str) . "<br>";


//calcolare la lunghezza della stringa

echo strlen($str) . "<br>" ;

// confronto stringhe

if(strcmp($str,"hello")==0){
    echo "Le stringhe sono uguali" . "<br>";
}else{
    echo "sono diverse" . "<br>";
}

// strcmp --> 0,1,-1

$input_email="gInO@gmail.com";
// tutte minuscole
echo strtolower($input_email) . "<br>";
$costante="piGreCO";
// tutti maiuscole 
echo strtoupper($costante) . "<br>";

// prima maiuscola
$name="carlo";
echo ucfirst($name);

// per prelevare sottostringhe
$str = "Hello World";

echo substr($str, 0, 5); // Hello ovvero da indice 0 + 5 
echo substr($str, 5, 6); // World ovvero da indice 5 + 6
echo substr($str, -6); // World da fine stringa -6


// per ricercare stringhe in una serie di stringhe
// esempio: una parola in una frase


$find = "Buongiorno";
$string = "Buongiorno mondo";

if (strpos($string, $find) != false) { // Il confronto 0 != false è uguale a false
    echo "Trovato";
}

if (strpos($string, $find) !== false) { // Il confronto eseguito tramite !== restituisce il risultato corretto.
    echo "Trovato";
}
