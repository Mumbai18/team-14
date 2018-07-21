<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use User;
use Document;
use DB;
use Twilio\Rest\Client;

class FileUpload extends Controller
{
    public function makeRequest(Request $request)
    {
      $req = new Request;
      $req->number = $request->number;
      $req->pinCode = $request->pinCode;
      $req->save();
      //send message to the executive
    }

    public function sendSMS($number="+918422099797",$message="Message from JPMC's CFG")
    {
      require __DIR__ . '../../vendor/autoload.php';

      // Use the REST API Client to make requests to the Twilio REST API


      // Your Account SID and Auth Token from twilio.com/console
      require _DIR_ . './secrets.php';
      $client = new Client($sid, $token);

      // Use the client to do fun stuff like send text messages!
      $client->messages->create(
          // the number you'd like to send the message to
          '$number',
          array(
              // A Twilio phone number you purchased at twilio.com/console
              'from' => '+918698552370',
              // the body of the text message you'd like to send
              'body' => '$message'
          )
      );
    }

    public function sendMail($mailid='',$message="Hi from JPMC-CFG")
    {

    }


}

?>
