
<?php include ('head.php');
include('config.php'); 
session_start();
 ?>
<section id="headerSection">
  <div class="container">
    <div class="navbar"
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <h1><a class="brand" href="admin.php"> SuzyIT  <small>  Ltd.</small></a></h1>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">
            <li class=""><a href="admin.php"><i style="align:right; height:auto" class="icon-user"></i></a></li>
            <li class="active"><a href="viewusers.php">Customers</a></li>
            <li class=""><a href="viewmsg.php">Message</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="viewadmn.php">Admin</a></li>
                <li><a href="viewusers.php">Users</a></li>
                <li><a href="viewpdct.php">Products</a></li>
                <li><a href="comingsoon.php">Comming Soon</a></li>
              </ul>
            </li>
            <li class=""><a href="adlog.php"><i class="icon-unlock"></i>  </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="bannerSection" style="background:url(themes/images/banner/portfolio.png) no-repeat center center #000;">
  <div class="container" >
    <h1 id="pageTitle">Admin <small> : Manage Users</small>
    <span class="pull-right toolTipgroup">
      <a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="themes/images/facebook.png" alt="facebook" title="facebook"></a>
      <a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="themes/images/twitter.png" alt="twitter" title="twitter"></a>
      <a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="themes/images/youtube.png" alt="youtube" title="youtube"></a>
    </span>
    </h1>
  </div>
</section>























