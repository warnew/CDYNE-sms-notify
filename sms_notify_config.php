<?
if (!defined('SMS_AUTORESPONDER')) die(); // against direct access

//Get your own!
$cdyne_lkey = 'FB11611C-B6EB-48BE-96B2-6990ECD87DD1';

$sms_notify_url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/sms_notify_autoresponder.php';

// the events are in this array
// 'event_name' => 'response_text'

$sms_notifier_events = array('new_mention'       => 'Hey, somebody just mentioned you at our forums!',
                             'long_time_no_see'  => 'Long time no see! You should check in to our forums!');


?>
