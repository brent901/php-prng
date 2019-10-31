<?php
// Less customizable, only able to choose how many digits, definitely not efficient.  
$digits = "3";
echo substr(preg_replace("/[^1-9]/", "",bin2hex(openssl_random_pseudo_bytes(512))),0,$digits);
?>

