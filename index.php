<?php
session_start();
echo("<li>wynik działania funkcji 'var_dump()':<br>");
var_dump($_SESSION);
echo("<li>właśnie zapisało się ciasteczko sesyjne<br>");
if ( !isset( $_SESSION['licznik'])){
    $_SESSION['licznik'] = 0;
    $_SESSION['moja-zmienna']="wpisuje-co-chce";
    echo "<li>pierwsze wejscie, czyli nie ustawiono jeszcze ciasteczka sesyjnego<br><br>";
}
echo"<li> odwiedziles ta strone teraz: ".$_SESSION['licznik']++;
?>
