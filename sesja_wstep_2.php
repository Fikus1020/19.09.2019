<?php
session_start();
echo(' a teraz w SESJA_WSTEP_2.php');

if ( $_POST['zmienna'] == '123' ) {
    echo 'zalogowano';
} else{
    echo '<br> NIE zalogowano';
}
?>
