<?php
include'header.php';
echo ' Hello followship'."\n";

$pda = 'Frodon';
echo $pda."<br>";

$ca = 'Sauron';
echo $ca."<br>";

$coma = '9';
echo $coma."<br>";

$ring_finger = true;
echo $ring_finger."<br>";

$new_pda = 'Gollum';
echo $new_pda.' est le nouveau porteur'."<br>";

$new_member = $coma+1;
echo $new_member."<br>";

$middleEarth ='';

echo 'Le porteur est '.$pda."<br>";

$ndp = 'nom du porteur '.$pda;
echo $ndp.' et '.$ca.' le recherche'."<br>";

$caMaj = strtoupper($ca);
echo $caMaj."<br>";

$ca = $caMaj;
echo $ca."<br>";
include 'footer.php';
$wizard = 'Gandalf';
require 'wizard.php';

?>