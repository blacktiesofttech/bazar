<?php
include_once('connection.php');
?>
<style>
	.buy-tickets {
		width: 60%;
		
		padding-left: 30px;
	}
	.buy-tickets a{
		width: 60%;
	}
</style>

<?php
 		$name=$_REQUEST["name"];
		$result="";
		if($name!=null && $name!="")		
		{
		$query="SELECT * FROM `signup` where id order by id desc";
		$result=mysqli_query($con,$query);
		}
		else
		{
			$query="SELECT * FROM `signup` where id order by id desc";
		$result=mysqli_query($con,$query);
		}


	 
	   		while($rows=mysqli_fetch_array($result))
			{
				$id=$rows["id"];
				$username=$rows["username"];
			    $email=$rows["email"];
          $status=$rows["status"];
          $date_time=$rows["date_time"];
       			
				echo "   

        <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Status</th>
                <th>Active & Diactive</th>
                <th>Date & Time</th>
                
            </tr>
        </thead>

        <tbody>
            <tr>
                     
                <td>$id</td>
                <td>$username</td>
                <td>$email</td>
                <td>$status</td>
                
                if ($status=='Active') 
                {
                
                <td>
                <center>
                <label class='switch'>
                <input type='checkbox' checked>
                <span class='slider round'></span>
                </label>
                </center>
                </td>
                
                }
                else
                {
                <td>
                <center>
                <label class='switch'>
                <input type='checkbox' >
                <span class='slider round'></span>
                </label>                  
                </center>
                </td>
              
                }
              
                <td>$date_time</td>
           
                
            </tr>
        </tbody>
      

   

				 ";
				
			}
			
			

?>

<script>
 /* function aud_play_pause() {
    var myAudio = document.getElementById("myTune");
    if (myAudio.paused) {
      $('#stateicon').removeClass('fa fa-play');
      $('#stateicon').addClass('fa fa-pause');
      myAudio.play();
    } else {
      $('#stateicon').removeClass('fa fa-pause');
      $('#stateicon').addClass('fa fa-play');
      myAudio.pause();
   }
 }*/


 var audio = new Audio("href");

$('#play-pause-button').on("click",function(){
  if($(this).hasClass('fa-play'))
   {
     $(this).removeClass('fa-play');
     $(this).addClass('fa-pause');
     audio.play();
   }
  else
   {
     $(this).removeClass('fa-pause');
     $(this).addClass('fa-play');
     audio.pause();
   }
});

audio.onended = function() {
     $("#play-pause-button").removeClass('fa-pause');
     $("#play-pause-button").addClass('fa-play');
};
</script>