<?php
include_once('header.php');
include_once('crud.php');
include_once('connection.php');
include_once('insertdata.php');
?>
<div class="main-content">
<div class="main-content-inner">
<div class="page-content">
<div class="page-header">
<h1>Notice</h1>

</div><!-- /.page-header -->
<!-- div.table-responsive -->
<!-- div.dataTables_borderWrap -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<div class="row">
<div class="col-xs-12">
<form method="post">  
    
    
    <textarea name="notices"></textarea>
    
    </br>
    <center><button type="submit" class="btn" name="insertnotices">Update</button></center>
  <!------------------------------ Forment Text Email End --------------------------------------> 
  </form>
<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

 
  </body>
</html>
