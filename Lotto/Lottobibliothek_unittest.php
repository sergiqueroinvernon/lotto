<?php
include  './Lottobibliothek.php'; 

echo getAktuellWoche()."<br>"; 
echo getAktuellYear()."<br>"; 
echo getWahrscheinlichkeitMitGewinn(5)."<br>"; 
echo getDatumOhneGewinn(5)."<br>"; ;
echo getDatumMitGewinn(350,2);
var_dump(getDatumMitGewinnMehrereJahre(100,2));



?>