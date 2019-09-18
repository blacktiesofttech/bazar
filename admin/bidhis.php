<?php
 include_once('header.php');
include_once("connection.php");
include_once('../crud.php');
    $con= connection();
    $user=$_SESSION['s_hello'];
?>
      <style>
.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 12px;
  width: 12px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
    <section>
      <div class="container">
  <h2>Dashboard</h2>
   <table id="example" class="table table-striped table-bordered" style="width:90%">

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
 <?php
  $sql="select * from signup where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
        <tbody>
            <tr>
                     
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <?php
                if ($row['status']=='Active') 
                {
                  ?>
                  <td  style='color:green;'><?php echo $row['status'];?></td>
                  <?php
                }
                else
                {
                  ?>
                  <td style='color:red;'><?php echo $row['status'];?></td>
                <?php
                }
                ?>
                <td>
                   <?php
                if ($row['status']=='Active') 
                {
                ?>
                <center>
                <label class="switch">
                <input type="checkbox" checked value="on"  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
                <span class="slider round" ></span>
                </label>
                
                </center>
                <?php 
                }
                else
                {
                ?>
                <center>
                <label class="switch">
                <input type="checkbox" value="on"  onchange="active_inactive_user(this.value,<?php echo $row['id'];?>)" >
                <span class="slider round" ></span>
                </label>
                
                </center>
                <?php
                }
                ?>
                

                </td>
                <td><?php echo $row['date_time'];?></td>
           
                
            </tr>
        </tbody>
        <?php
      }
      ?>

    </table>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script >
      function active_inactive_user(val,id){
        $.ajax({
          type: 'post',
          url: 'change.php',
          data: {val:val,id:id},
          success:function(result){
            if (result=='Active') {
              $
            }
          }

        });
      }
    </script>

    
  <section>
  <div class="container">
  <div class="row">
  <?php
  $query=("select * from insertnotices where id order by id desc limit 1");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">Notices Board</h4></div>
  <div class="panel-body" id="di2"><?php echo $row['notices'];?></div>
  </div>
  </div>
  <?php
  }
  $query=("select * from insertnews where id order by id desc limit 1");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-6">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h4 style="text-align:center;">News</h4></div>
  <div class="panel-body" id="di2"><?php echo $row['news'];?></div>
  </div>
  </div>
  <?php
  }
  ?>
  </section>
      

      
    <?php include_once('footer.php');
?>
  </body>
</html>