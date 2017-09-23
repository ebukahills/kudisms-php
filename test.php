<?php

require_once 'src/Kudisms.php';
// use Sccofield\Kudisms\Kudisms;





$kudisms = new Kudisms('michael_umanah@yahoo.com', 'aniebiet', 'smskernel');
// $kudisms->checkBalance();

// $number = $kudisms->formatNumber('0347062332');
// print_r($number);
$numbers = ['07062359125'];
$kudisms->sendsms('07062359126', 'Hellomatar hj'); 

// $number = 0347062359125;
// echo("$number");
// echo (base_convert($number,10,10));
// echo strval($number);
   