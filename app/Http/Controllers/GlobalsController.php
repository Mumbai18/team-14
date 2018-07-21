<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Document;
use DB;
use Twilio\Rest\Client;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

class GlobalsController extends Controller
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

    public function sendMail($mailid='',$message="Hi from JPMC-CFG",$subject="Subject")
    {
<<<<<<< HEAD
      Mail::send('emails.welcome', ['key' => 'value'], function($message)
      {
          $message->to('mitvparekh9@yahoo.com', 'John Smith')->subject('Welcome!');
      });
=======
      $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
      try {
          //Server settings
          $mail->SMTPDebug = 2;                                 // Enable verbose debug output
          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'user@example.com';                 // SMTP username
          $mail->Password = 'secret';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom('mit@example.com', 'Mailer');
          $mail->addAddress('mitvparekh9@yahoo.com');     // Add a recipient


          //Content
          $mail->isHTML(false);                                  // Set email format to HTML
          $mail->Subject = '$subject';
          $mail->Body    = '$message';
          

          $mail->send();
          echo 'Message has been sent';
      } catch (Exception $e) {
          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }
>>>>>>> 173f73578f9b7fcf224cba5ab0d0e17a5413fe60
    }


}

?>
