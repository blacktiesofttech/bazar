<?php include_once('header.php');
include_once("connection.php");
include_once('crud.php');


?>
      <style>
        #gg
        {
          background-color: #372f2d;
          border: #372f2d;
          border-radius: 0px;
        }

        #gg h3
        {
          font-size: 15px;
          padding:0px;
          color: #fcfc04;
        }
      </style>
    <section>
      <div class="container">
  <h2>Dashboard</h2>
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Game Results</a></li>
    <li><a data-toggle="pill" href="#menu1">Game Rate</a></li>
    <li><a data-toggle="pill" href="#menu2" style="display:none;">Game Timeing</a></li>
    
  </ul>
  
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <br>
  <section>
  <div class="container">    
  <div class="row">
  <?php
  $query=("SELECT * FROM single INNER JOIN insertgameresult ON single.id=insertgameresult.ref_id");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-3">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3></div>
  <div class="panel-footer" id="di2"><h2 style="text-align:center; font-size:35px;"><?php echo $row['sattanumber'];?></h2>


  <h3 style="text-align:center; font-size:20px;">Open  : <?php echo $row['opentiming'];?></h3>
  
  
  </div>
  </div>
  </div>
  <div class="col-sm-3">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3></div>
  <div class="panel-footer" id="di2"><h2 style="text-align:center; font-size:35px;"><?php echo $row['sattanumberclose'];?></h2>


  <h3 style="text-align:center; font-size:20px;">Close : <?php echo $row['timing'];?></h3>
  </div>
  </div>
  </div>
  <?php
  }
  ?>
  </div>
  </div>
  <br>
  </section>
  </div>
  <div id="menu1" class="tab-pane fade">
  <div class="container">
  <div class="table-responsive">          
  <table class="table"><br>
  <thead>
  <tr>
  <th>#</th>
  <th>Game Type</th>
  <th>Rate</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  $query=("select * from insertgamerate");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <tr>
  <td><?php echo $i++;?></td>
  <td><?php echo $row['gametype'];?></td>
  <td><?php echo $row['bidamount'];?></td>
  </tr>
  <?php
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>
  <div id="menu2" class="tab-pane fade">
  <br><section>
  <div class="container">    
  <div class="row">
  <?php
  $query=("select * from insertgametimeing");
  $rst=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($rst))
  {
  ?>
  <div class="col-sm-3">
  <div class="panel panel-primary" id="di">
  <div class="panel-heading" id="di1"><h3 style="text-align:center;"><?php echo $row['cityname'];?></h3></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">Opening <?php echo $row['opentime'];?></h4></div>
  <div class="panel-footer" id="di2"><h4 style="text-align:center;">Cloesing <?php echo $row['closetime'];?></h4></div>
  </div>
  </div>
  <?php
  }
  ?>  
  </div>
  </div>
  <br>
  </section>
  </div> 
  </div>
  </div>
  </section>
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
      




<?php include_once('footer.php');?>
</body>
</html>