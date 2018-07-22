<?php

$con =mysqli_connect("localhost","root","qweasdzxc","egnitia_localhost") or die(mysqli_error($con));
    //$con =mysqli_connect("localhost","egnitiaa_vishal","qweasdzxc","egnitiaa_EgnitiaAdmissions"); 

   
   
    /*session_start();
        $_SESSION["logged_in"] = true; 
    
	$User_id= $_SESSION["User_id"];
	
	$abc = "SELECT * from user where User_id = $User_id";
                    $pqr = mysqli_query($con, $abc);
                    $xyz = mysqli_fetch_assoc($pqr);

                    $abc = "SELECT * from user where User_id = $User_id";
	$pqr = mysqli_query($con, $abc);
    $xyz = mysqli_fetch_assoc($pqr);
    $usertype = $xyz['User_type'];
    

    if($usertype==0){
    $qwes = "SELECT * from student where User_id = $User_id";
    $rty = mysqli_query($con, $qwes);
    $uio = mysqli_fetch_assoc($rty);
    $fname = $uio['First_name'];
    }


    elseif($usertype == 1 ){

    $qwea = "SELECT * from agent where Agent_id = $User_id";
    $rty = mysqli_query($con, $qwea);
    $uio = mysqli_fetch_assoc($rty);
    $fname = $uio['First_Name'];
    }

    else{
    $qwem = "SELECT * from marketer where Marketer_id = $User_id";
    $rty = mysqli_query($con, $qwem);
    $uio = mysqli_fetch_assoc($rty);
    $fname = $uio['First_name'];
    }
    
    $email = $xyz['User_Email'];*/

set_time_limit(0);
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
require_once '../vendor/autoload.php';

class Chat implements MessageComponentInterface {
	protected $clients;
	protected $users;

	public function __construct() {
		$this->clients = new \SplObjectStorage;
	}

	public function onOpen(ConnectionInterface $conn) {
		$this->clients->attach($conn);
		// $this->users[$conn->resourceId] = $conn;
	}

	public function onClose(ConnectionInterface $conn) {
		$this->clients->detach($conn);
		// unset($this->users[$conn->resourceId]);
	}

	public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

		
		$data = json_decode($msg, true);
		$data['from'] = $fname;
		$data['msg'] = $data['msg'];
		$data['dt'] = date("d-m-Y h:i:s");

        foreach ($this->clients as $client) {
            
                // The sender is not the receiver, send to each client connected
				$client->send(json_encode($data));
	
            
        }
    }


	public function onError(ConnectionInterface $conn, \Exception $e) {
		$conn->close();
	}
}
$server = IoServer::factory(
	new HttpServer(new WsServer(new Chat())),
	8080
);
$server->run();
?>