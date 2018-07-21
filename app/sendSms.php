<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACc8c51d407455d1d4aa2c056c728a54f5';
$token = 'e8028d2b9e62842aeb94a9acb564327a';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+918422099797',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+918698552370',
        // the body of the text message you'd like to send
        'body' => 'Hey ! Welcome to JP Morgan Chase and co'
    )
);
echo "Your message has been sent successfully.";
?>