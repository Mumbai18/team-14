<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 
include('./vendor/autoload.php');
use Twilio\Rest\Client; // Loads the library 

 
$account_sid = 'ACc8c51d407455d1d4aa2c056c728a54f5'; 
$auth_token = 'e8028d2b9e62842aeb94a9acb564327a'; 
$client = new Client($account_sid, $auth_token); 

$user = '+918422099797';
/*$user = '+918790687180';*/
$TwilioNumber = '+8698552370';
$Body = "Welcome to Twilio Session !";
 
try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Change the 'To' number below to whatever number you'd like 
            // to call.
            $user,

            // Change the 'From' number below to be a valid Twilio number 
            // that you've purchased or verified with Twilio.
            $TwilioNumber,

            //  Set the URL Twilio will request when the call is answered.
            array("url" => "http://localhost/twilio/basicCallResponse.php")
        );
        echo "Started call: " . $call->sid;

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }