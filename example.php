<?php

require_once 'src/Kudisms.php';

// initialize a new class of Kudisms
$kudisms = new Kudisms('michael_umanah@yahoo.com', 'aniebiet', 'smskernel');

//check sms balance 
$kudisms->checkBalance();

//Send sms
//Numbers must either be a single string or an array of strings.
$numbers = ['07012345677','2347075359836','08036566266','+2347089234567'];
$kudisms->sendsms($numbers, 'Hello test sms'); 

