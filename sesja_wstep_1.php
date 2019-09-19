<?php
session_start();
echo('jestem w SESJA_WSTEP_1.php');

?>
<form action="sesja_wstep_2.php" method="POST">
    <input type="text" name="zmienna">
    <input type="submit" value="send">
</form>
<?php
echo '<br>session_id() : '.session_id().' <br>$_COOKIE[PHPSESSID] : '.$_COOKIE['PHPSESSID'];
?>
