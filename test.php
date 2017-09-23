<?php

require_once 'src/Kudisms.php';




$kudisms = new Kudisms('michael_umanah@yahoo.com', 'aniebiet', 'smskernel');
// $kudisms->checkBalance();

// $number = $kudisms->formatNumber(2347062359125);
// print_r($number);
$numbers = [2347062359125, 2347062359126, 2347062359127];
$kudisms->sendsms($numbers, 'Hellomatar hj');  
   
