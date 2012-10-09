#!/usr/bin/php -q
<?php
require 'class-Clockwork.php';
$api_key = 'da1ff8e37ec6c9009f27905a1dd2c7d35a9099c5';
$send_to = '5035517496';
 
try
{
    // Create a Clockwork object using your API key
    $clockwork = new Clockwork($api_key);
 
    // Setup and send a message
    $message = array( 'to' => $send_to, 'message' => 'This is a test!' );
    $result = $clockwork->send($message);
 
    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
?>
