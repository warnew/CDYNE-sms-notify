<?

define('SMS_AUTORESPONDER',true);

include('./sms_notify_config.php');

function sms_notify($phone_number,$event) {
  global $sms_notify_url;
  $data = 'sms[]='.json_encode(array('event' => $event, 'number' => $phone_number));
  $ch = curl_init( $sms_notify_url );
  $options = array(
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_POST => true
    );
  curl_setopt_array( $ch, $options );
  // Getting results
  $result =  curl_exec($ch); // Getting jSON result string
  print $result;
}

?>
