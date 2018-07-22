<?php
    $con =mysqli_connect("localhost","root","qweasdzxc","egnitia_localhost") or die(mysqli_error($con));
    session_start();
    $_SESSION["logged_in"] = true;   
    $User_id= $_SESSION["User_id"];
    $msg = mysqli_real_escape_string($con, $_POST['msg']);
   // $amount = mysqli_real_escape_string($con, $_POST['fname']);
    $created_on = mysqli_real_escape_string($con, $_POST['dt']);

    $insert_msg = "INSERT into chatrooms (sender_id,msg) values ('$User_id','$msg')";
    $insert_msg_query = mysqli_query($con, $insert_msg);
    $row = mysqli_fetch_assoc($insert_msg_query);
    $chat_id = row['chat_id'];
    mysql_query($con,"UPDATE  `chatrooms` SET `created_on` = now() where chat_id = $chat_id");

   
    // retrive chats logic starts

    /*$retr = "SELECT * from chatrooms where sender_id = $User_id order by created_on DESC";
    $retr_query = mysqli_query($con,$retr);
    
    while($retr_row = mysqli_fetch_assoc($retr_query))
    {
        echo $retr_row['chat_id'];
        echo $retr_row['sender_id'];
        echo $retr_row['msg'];
        echo $retr_row['created_on'];
    }*/


?>