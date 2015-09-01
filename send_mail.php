<?php
function send_email($to_email,$subject,$message1)
{
    require_once 'Mandrill.php';
$apikey = '%API_key%'; // use this to encrypt your api key
$mandrill = new Mandrill($apikey);

$message = new stdClass();
$message->html = $message1;
$message->text = $message1;
$message->subject = $subject;
<<< 
$message->from_email = "arc-tech@visualstudio.com"; // Add your sending address
$message->from_name = "Anonymous"; 


>>> $cc =>hax
}
?>