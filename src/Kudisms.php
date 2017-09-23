<?php 

class Kudisms {

  function __construct($username, $password, $senderId){
    $this->username = $username;
    $this->password = $password;
    $this->senderId = $senderId;
   
  }

  public function checkbalance(){
    $balance_url = 'http://account.kudisms.net/api/?username='.$this->username.'&password='.$this->password.'&action=balance' ;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $balance_url
    ));
    $result = curl_exec($curl);
    curl_close($curl);
    //TODO: Get error and response codes
  }

  public function formatNumber($number) {
    $prefix = '234' ;
    $stringnum = (String)$number;
    $num = trim($stringnum, " ");
    if (strlen($num) <= 10) {
      return $prefix . $num;
    } else if (substr($num, 1) == '0') {
      return $prefix . substr($num, 1);
    } else if (substr($num, 4) == '+234') {
      return $prefix . substr($num, 1);
    } else {
      return $num;
    }
  }

  public function sendsms($number, $message){
    $msg = str_replace(" ","%20",$message);
    $sms_url = 'http://account.kudisms.net/api/?username='.$this->username.'&password='.$this->password.'&message='.$msg.'&sender='.$this->senderId.'&mobiles='.$number.',';
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $sms_url
    ));
    $result = curl_exec($curl);
    curl_close($curl);

  }
  
}