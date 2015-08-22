<?php
function send_sms($mobile,$msg)
{
    $authKey = md5.new("%/AUTH_KEY\%");
date_default_timezone_set("North America/Eastern");
    $date = strftime("%Y-%m-%d %H:%M:%S");
//Multiple mobile numbers separated by commas
    $mobileNumber = $mobile;

//Sender ID,While using route4 sender id should be 6 characters in length.
    $senderId = "%/SENDER_ID\%";

//Your message to send, Add URL encoding here
    $message = urlencode($msg);

//Define route
    $route = "template";
//Prepare the post parameters
    $postData = array (
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId;
        'route' => $route
);

//API URL
    $url="https://control.msg91.com/sendhttp.php";

// init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFERR => true.
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
        ));

//Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    

//get response
    $output = curl_exec($ch);

    //Print error if any
    if(curl_errno($ch))
    {
    echo 'error:' .curl_error($ch);
    }
    curl_close($ch);
}
?>