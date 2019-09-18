<?php 
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
?>
      
    <section>
      <div class="container">
  <h2>Update</h2>
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">User Aprovel</a></li>
    <li><a data-toggle="pill" href="#menu1">Single</a></li>
    <li><a data-toggle="pill" href="#menu2">Jodi</a></li>
  <li><a data-toggle="pill" href="#menu3">Single Patti</a></li>
  <li><a data-toggle="pill" href="#menu4">Double Patti</a></li>
  <li><a data-toggle="pill" href="#menu5">Tripal Patti</a></li>
  <li><a data-toggle="pill" href="#menu6">Half Sangam</a></li>
  <li><a data-toggle="pill" href="#menu7">Full Sangam</a></li>
    
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br>
      <section>
<table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>Email</th>
  <th>Full Name</th>
  <th>Account Number</th>
  <th>Amount</th>
  <th>Date & Time</th>
  <th>Status</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from signup where id order by id desc";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['username']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['gender']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['date_time']; ?></td>
  <td><?php echo $row['status']; ?></td><td>
	<a href="editaprovel.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
 	</td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
      <br>
      </section>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="container">
        <br>
   <div class="table-responsive">          
  <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from single";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="editsingle.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
  </div>
</div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <br><section>
     <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from jodi";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="editjodi.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
    <br>

      </section>
    </div>
    <div id="menu3" class="tab-pane fade">
      <br><section>
     <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from singlepatti";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="editsinglepatti.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
    <br>

      </section>
    </div>
    <div id="menu4" class="tab-pane fade">
      <br><section>
     <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from doublepatti";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="editdoublepatti.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
    <br>

      </section>
    </div>
    <div id="menu5" class="tab-pane fade">
      <br><section>
     <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from tripalpatti";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="edittripalpatti.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
    <br>

      </section>
    </div>
    <div id="menu6" class="tab-pane fade">
      <br><section>
     <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from halfsangam";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="edithalfsangam.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
    <br>

      </section>
    </div>
    <div id="menu7" class="tab-pane fade">
      <br><section>
     <table id="" class="table table-striped table-bordered ">

  <thead >
  <tr class="info" id="tds">
  <th>ID</th>

  <th>City Name</th>
  <th>Open & Close</th>
  <th>Timing</th>
  <th>Active</th>
  </tr>
  <?php
  $sql="select * from fullsangam";
  $result=mysqli_query($con,$sql) or die(mysqli_query($con));
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <tbody>
  <tr class="success" id="tds">
  <td><?php echo $row['id']; ?></td>                 
  <td><?php echo $row['cityname']; ?></td>                 
  <td><?php echo $row['open']; ?></td>
  <td><?php echo $row['timing']; ?></td>
  <td>
  <a href="editfullsangam.php?edit=<?php echo $row ['id']; ?>"><button type="submit" name="edit" class="btn fs"><span class="menu-icon fa fa-edit"></span> Update</button></a>
  </td>
  </tr>
  </tbody>
  <?php
  }
  ?>
    </table>
    <br>

      </section>
    </div>
  </div>
</div>
      </section>
      




    <?php include_once('footer.php');
?>
  </body>
</html>