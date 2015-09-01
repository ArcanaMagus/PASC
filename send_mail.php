<?php
function send_email($to_email,$subject,$message1)
{
    require_once 'Mandrill.php';
$apikey = '%API_key%'; // use this to encrypt your api key
$mandrill = new Mandrill($apikey);

$message = new stdClass();
$message->html = $message1;
}
?>