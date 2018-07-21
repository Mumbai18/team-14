<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<title></title>
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="margin-top: 5px; padding-top: 0 ">Welcome to our Chatroom</h2>

		<div class="row">
			<div class="col-md-4">
				
				<table class="table table-striped">
					<thead>
						<tr>
							<th> Users</th>
                            <th> Username </th>
                            <th> Email </th>
                        </tr>
                        <tr>
                            <?php echo '<input type="hidden" name="userId" id="userId" value="' .$User_id. '">' ?>
                            <td> <?php echo $var++; ?></td>
                            <td> <?php echo $fname; ?> </td>
                            <td> <?php echo $email; ?> </td>
                        </tr>
					</thead>
				</table>
			</div>
			<div class="col-md-8" style="height:100%">
                <div id="messages">
                    <table id="chats" class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="4" scope="col"><strong>Chat Room</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               // $response = $_GET['response'];
                                //foreach ($response as $key => $response ){
                                   /*echo '<tr><td valign="top"><div><strong>'.$response['sender_id'].'</strong></div><div>'.$response['msg'].'
                                   </div><td align="right" valign="top"> '.$response['created_on'].' </td></tr>';*/
                                 //  echo $response;
                                //}
                                $retr = "SELECT * from chatrooms  order by created_on DESC";
                                $retr_query = mysqli_query($con,$retr);
    
                                    while($retr_row = mysqli_fetch_assoc($retr_query))
                                    {
                                        $asd = mysqli_query($con,"SELECT * from user where User_id = $retr_row[sender_id]");
                                        $asd_row = mysqli_fetch_assoc($asd);
                                        
                                        $corr_type = $asd_row['User_type'];
                                        //echo $corr_type;
                                        if($corr_type==0){
                                            $qwes = "SELECT * from student where User_id = $retr_row[sender_id] ";
                                            $rty = mysqli_query($con, $qwes);
                                            $uio = mysqli_fetch_assoc($rty);
                                            $fn = $uio['First_name'];
                                            }
                                        
                                        
                                            elseif($corr_type == 1 ){
                                        
                                            $qwea = "SELECT * from agent where Agent_id = $retr_row[sender_id]";
                                            $rty = mysqli_query($con, $qwea);
                                            $uio = mysqli_fetch_assoc($rty);
                                            $fn = $uio['First_Name'];
                                            }
                                        
                                            else{
                                            $qwem = "SELECT * from marketer where Marketer_id = $retr_row[sender_id]";
                                            $rty = mysqli_query($con, $qwem);
                                            $uio = mysqli_fetch_assoc($rty);
                                            $fn = $uio['First_name'];
                                            }
                                            


                                        echo '<tr><td valign="top"><div><strong>'. $fn . '</strong></div><div>';
                                        echo '</div><td align="right" valign="top">'. $retr_row['msg'] . '</div>';
                                        echo '<td align="right" valign="top">'. $retr_row['created_on'] . '</td></tr>';
                                    }
                             ?>
                    </tbody>
                    </table>

                </div>  
                   <form id="chat-room-frm" method="post" action="">
                            <div class="form-group">
                                <textarea class="form-control" id="msg" name="msg" placeholder="Enter Message"> </textarea>
                            </div>

                            <div class="form-group">
                                <input type="button" value="send" class="btn btn-success btn-block" id="send" name="send">
                            </div>
                  </form>
                        


            </div>
		</div>
	</div>

</body>
<script type="text/javascript">
    $(document).ready(function(){
        var conn = new WebSocket('ws://localhost:8080/');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            var fname = "<?php echo $fname ?>";
            var dt = "<?php echo date("d-m-Y h:i:s") ?>";
            
            console.log(e.data);
            var data= JSON.parse(e.data);
           var row = '<tr><td valign="top"><div><strong>' + data.fname +'</strong></div><div>' + data.msg +'</div><td align="right" valign="top"> ' + dt +' </td></tr>';
            //document.write(row);
            $('#chats > tbody').append(row);

        };
        
        $("#send").click(function(){
            
            var userId = $("#userId").val();  
            var msg = $("#msg").val();
            var fname = "<?php echo $fname ?>";
            var dt = "<?php echo date("Y-m-d H:i:s") ?>";

            var data = {
                userId: userId,
                msg: msg,
                fname: fname
            };
            
            
           // alert(JSON.stringify(data));
           conn.send(JSON.stringify(data));
            
           // var row = '<tr><td valign="top"><div><strong>' + fname  +'</strong></div><div>' + data.msg +'</div><td align="right" valign="top"> ' + dt +' </td></tr>';
            //document.write(row);
            //$('#chats > tbody').append(row);


            $.post("chatrooms.php",
            {
                userId: $("#userId").val(),
                msg: $("#msg").val(),
                fname: "<?php echo $fname ?>",
                dt : "<?php echo date("d-m-Y h:i:s") ?>",
    
            },
            )
            

             $.post(
                "retr_chat.php",
                { name: fname },
                function(response) {
                    var myvariable = response.msg;
                    var times = response.dt;
                    var senderId = response.userId

                    console.log('Retreived data: ', myvariable, times, senderId);
                }, 'json'
            );  

        })
    })


    function eraseText() {
    document.getElementById("msg").value = "";
    }
</script>
</html>