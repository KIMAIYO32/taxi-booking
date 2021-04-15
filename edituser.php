<?php
include ('head.php');
include('config.php');
if (isset($_GET['email']))
 {
	# code...
	$var1 = $_GET['email'];
}
$selectQuery = "select * from mstr_prof where email = '".$var1."' ";
$rs = mysql_query($selectQuery);
$record = mysql_fetch_array($rs);
if(mysql_num_rows($rs)==0)
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
				<h1><a class="brand" href="admin.php"> PTAXI  <small>  Ltd.</small></a></h1>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
            <li class="active"><a href="admin.php"><i style="align:right; height:auto" class="icon-user"></i></a></li>
						<li class=""><a href="">Customers</a></li>
            <li class=""><a href="viewmsg.php">Message</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage<b class="caret"></b></a>
							<ul class="dropdown-menu">
                <li><a href="viewadmn.php">Admin</a></li>
								<li><a href="viewusers.php">Users</a></li>
								<li><a href="#">Customers</a></li>
								<li><a href="#">Products</a></li>
								<li><a href="comingsoon.php">Comming Soon</a></li>
							</ul>
						</li>
            <li class=""><a href="">Updates</a></li>
						<li class=""><a href="adlog.php">Log Out	</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="bannerSection" style="background:url(themes/images/banner/portfolio.png) no-repeat center center #000;">
  <div class="container" >
    <h1 id="pageTitle">Admin <small> : Functions of Admin</small>
    <span class="pull-right toolTipgroup">
      <a href="#" data-placement="top" data-original-title="Find us on via facebook"><img style="width:45px" src="themes/images/facebook.png" alt="facebook" title="facebook"></a>
      <a href="#" data-placement="top" data-original-title="Find us on via twitter"><img style="width:45px" src="themes/images/twitter.png" alt="twitter" title="twitter"></a>
      <a href="#" data-placement="top" data-original-title="Find us on via youtube"><img style="width:45px" src="themes/images/youtube.png" alt="youtube" title="youtube"></a>
    </span>
    </h1>
  </div>
</section>
<h3>&nbsp;&nbsp;&nbsp;<i class="icon-edit"></i> <span class="style15">&nbsp;&nbsp;Edit User Profile</span></h3>
<section id="form">
    <div class="container">
    <div class="row-fluid">
    <form action="updateusers.php" enctype="multipart/form-data" method="post">
      <div class="span5">
      <fieldset>
        <div class="control-group">
      <label class="control-label" for="input11">First Name</label>
      <div class="controls">
    <input type="text" name="fname" placeholder="Old First Name" readonly="yes"
    value="<?php echo $record["firstname"]; ?>" required="required" class="input-xlarge" id="">

      </div>
        </div>
        <div class="control-group">
        <label class="control-label" for="input11">New First Name</label>
        <div class="controls">
          <input type="text" name="nwname" placeholder="New Username" required="required" class="input-xlarge" id="">
        </div>
        </div>
        <div class="control-group">
      <label class="control-label" for="input11">Last Name</label>
      <div class="controls">
    <input type="text" name="lname" placeholder="Last Name" readonly="yes" required="required"
    value="<?php echo $record["lastname"]; ?>" class="input-xlarge" id="">
        </div>
        </div>
      <div class="control-group">
          <label class="control-label" for="input11">New Last Name</label>
          <div class="controls">
            <input type="text" name="newlname" placeholder="Enter New Last Name" required="required" class="input-xlarge" id="">

          </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="input01">Address</label>
          <div class="controls">
            <input type="text" name="address" placeholder="Enter Contact Address" required="required"
            value="<?php echo $record["address"]; ?>" readonly="yes" class="input-xlarge" id="">
            <div class="control-group">
                <label class="control-label" for="input11">New Address</label>
                <div class="controls">
                  <input type="text" name="newadrs" placeholder="Enter New Address" required="required"
                  class="input-xlarge" id="">
                </div>
                </div>
              </div>
            	</div>
             </div>
          <div class="span5">
            <div class="control-group">
            <label class="control-label" for="input01">Email</label>
            <div class="controls">
            	<input type="text" name="email" placeholder="Enter your E-mail"
              required="required" value="<?php echo $record["email"]; ?>" readonly="yes" class="input-xlarge" id="">

            </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="input01">New Email Address</label>
            <div class="controls">
            	<input type="text" name="newmail" placeholder="Enter New Email" required="required"  class="input-xlarge" id="">

            </div>
            </div>
            <div class="control-group">
           <label class="control-label" for="input01">Phone Number</label>
            <div class="controls">
            	<input type="text" name="pswrd" placeholder="Choose Password" required="required"
              value="<?php echo $record["contact_no"]; ?>" readonly="yes" class="input-xlarge" id="">

            </div>
          </div>
          <div class="control-group">
          <label class="control-label" for="input01">New Contact Number</label>
          <div class="controls">
            <input type="text" name="newcon" placeholder="New Contacts" required="required" class="input-xlarge" id="">

         </div>
       </div>
            <div align="center">
            <div class="control-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <button  type="reset"class="btn"  value="back" onclick="history.go(-1);return true">Cancel</button>
            </div>
          </div>
      </div>
    </div>
    </div>
          </fieldset>
          </form>
          <hr></hr>
 </section>
 <!-- Footer
 ================================================== -->
 <?php include('footer.php');?>
 <!-- Javascript
   ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
   <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
 <script src="themes/js/jquery-1.8.3.min.js"></script>
 <script src="themes/js/bootstrap.min.js"></script>
 <script src="themes/js/bootstrap-tooltip.js"></script>
   <script src="themes/js/bootstrap-popover.js"></script>
 <script src="themes/js/business_ltd_1.0.js"></script>
 <!-- Themes switcher section ============================================================================================= -->
 <div id="secectionBox">
 <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
 <script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
 <div id="themeContainer">
 <div id="hideme" class="themeTitle">Style Selector</div>
 <div class="themeName">Oregional Skin</div>
 <div class="images style">
 <a href="themes/css/#" name="current"><img src="themes/switch/images/clr/current.png" alt="bootstrap business templates" class="active"></a>
 </div>
 <div class="themeName">Bootswatch Skins (11)</div>
 <div class="images style">
   <a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
   <a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
   <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
 </div>
 <div class="themeName">Background Patterns </div>
 <div class="images patterns">
   <a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
   <a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

   <a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

   <a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
   <a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

 </div>
 </div>
 </div>
 <span id="themesBtn"></span>
 </body>
 </html>
