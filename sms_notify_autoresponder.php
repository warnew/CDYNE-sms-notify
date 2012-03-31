<?
define('SMS_AUTORESPONDER',true);

include('./sms-notify-config.php');

//This is how we use the CDYNE SMS Notify! API:
function send_texts($numbers,$text) {
  global $cdyne_lkey;
  
  // Create a new soap client based on the SMS Notify! WCF service
  $client = new SoapClient('http://sms2.cdyne.com/sms.svc?wsdl');
 
  // Cycle trough the numbers
  foreach ($numbers as $num) {
    // Specify the text
    $param = array(
      'PhoneNumber' => $num,
      'LicenseKey' => $cdyne_lkey; 
      'Message' => $text
    );
    // Send the text
    $result[] = $client->SimpleSMSsend($param);
  }
  // View the response from CDYNE while debugging
  if ($_GET['debug'] == 1) print_r($result);
}

function generate_text($event,$params) {
  // we don't use params yet, see plans...
  return $sms_notifier_events[$event];
}

function process_request() {
  // we only access CDYNE's API so there is no need to sanitize the input \o/

  if (!empty($_GET['sms'])) foreach ($_GET['sms'] as $sms) { // most of the time this will send only one text, but why not?
    $text = generate_text($sms['event'],$sms['params']);
    if (empty($text)) continue;
    send_text($sms['number'],$text);
  }
}

process_request();
 
?>