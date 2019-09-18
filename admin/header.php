<?php
session_start();
if($_SESSION['s_hello']==null)
{
    echo "<script>window.location='login.php'</script>";
}

include_once('crud.php');
include_once('connection.php');
include_once('bootstarp.php');
?>


<body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state">
<div class="navbar-container ace-save-state" id="navbar-container">
<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
<span class="sr-only">Toggle sidebar</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="navbar-header pull-left">
<a href="index.php" class="navbar-brand">
<small><i class="fa fa-user"></i>Satta Bazar</small></a>
</div>
<div class="navbar-buttons navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">
<li class="">
<a data-toggle="" href="logout.php" class="">
<i class="ace-icon fa fa-sign-out"></i>
<span class="user-info" id="ss">Logout</span></a></li>
</ul>
</div>
</div>
</div>
<div class="main-container ace-save-state" id="main-container">

<script type="text/javascript">
try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar responsive ace-save-state">

<script type="text/javascript">
try{ace.settings.loadState('sidebar')}catch(e){}
</script>



<ul class="nav nav-list">
<li class="active">
<a href="index.php">
<i class="menu-icon fa fa-tachometer"></i>
<span class="menu-text"> Dashboard </span>
</a>
<b class="arrow"></b>
</li>
<li class="">
<a href="bazar.php" class="">
<i class="menu-icon fa fa-th"></i>
<span class="menu-text">Bazaar</span></a>
</li>
<li class="">
<a href="user.php" class="">
<i class="menu-icon fa fa-users"></i>
<span class="menu-text">Users</span></a>
</li>
<li class="">
<a href="gamepoint.php" class="">
<i class="menu-icon fa fa-bar-chart"></i>
<span class="menu-text">Reports</span></a>
</li>
<li class="">
<a href="notice.php" class="">
<i class="menu-icon fa fa-bell-o"></i>
<span class="menu-text">Notice</span></a>
</li>
</ul><!-- /.nav-list -->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>