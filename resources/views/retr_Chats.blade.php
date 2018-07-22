<?php
    $con =mysqli_connect("localhost","root","qweasdzxc","egnitia_localhost") or die(mysqli_error($con));
    session_start();
    $_SESSION["logged_in"] = true;   
    $User_id= $_SESSION["User_id"];

    $retr = "SELECT * from chatrooms where sender_id = $User_id order by created_on DESC";
    $retr_query = mysqli_query($con,$retr);
    $response = array();
    while($retr_row = mysqli_fetch_assoc($retr_query))
    {
        
        $response['chat_id'] = $retr_row['chat_id'];
        $response['sender_id'] = $retr_row['sender_id'];
        $response['msg'] = $retr_row['msg'];
        $response['created_on'] = $retr_row['created_on'];
        //echo json_encode($response);
        
    }
    echo '<a href="chatroom.php?response=<?php echo $response ?> ">click here </a>';
    
    
?>