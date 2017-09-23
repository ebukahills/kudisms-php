<?php 


// http://account.kudisms.net/api/?username=michael_umanah@yahoo.com&password=aniebiet&action=balance
// http://account.kudisms.net/api/?username=user&password=pass&message=test &sender=welcome&mobiles=2348030000000,2348020000000
// http://account.kudisms.net/api/?username=michael_umanah@yahoo.com&password=aniebiet&message=test&sender=welcome&mobiles=2347062359125,

// namespace Sccofield\Kudisms;


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
    // also get the error and response code 
  }

  static function formatNumber ($number) {
    $prefix = '234' ;
    // $stringnum = (String)$number;
    $stringnum = $number;
    $num = trim($stringnum, " ");
    if (strlen($num) <= 10) {
      return $prefix . $num;
    } else if (substr( $num, 0, 1 ) === '0' && strlen($num) === 11 ) {
      return $prefix . substr($num, 1);
    } else if (substr($num, 0, 4) === '+234') {
      return $prefix . substr($num, 4);
    } else {
      return $num;
    }
  }

  public function sendsms($num, $message){
    if(is_array($num) == true){
      $formated_number = array_map('Kudisms::formatNumber', $num);
      $receipients = implode(",", $formated_number);
    }else{
      $formated_number = $this->formatNumber($num);
      $receipients = $formated_number;
    }

    $msg = str_replace(" ","%20",$message);
    $sms_url = 'http://account.kudisms.net/api/?username='.$this->username.'&password='.$this->password.'&message='.$msg.'&sender='.$this->senderId.'&mobiles='.$receipients.',';
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $sms_url
    ));
    $result = curl_exec($curl);
    curl_close($curl);

  }
  
}