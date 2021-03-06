<?php 
include('includes/config.php');
include('structure/database.php'); 
include('structure/base.php');
include('structure/user.php');

$database = new database($db_host, $db_name, $db_user, $db_password);
$base = new base($database);
$user = new user($database);

//set some basic vars
$username = $user->getUsername($_COOKIE['user'], 2);
$rank = $user->getRank($username);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns:IE>

<head>
<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<title><?php echo $data['wb_title']; ?></title>
<link href="css/basic-3.css" rel="stylesheet" type="text/css" media="all">
<link href="css/main/title-5.css" rel="stylesheet" type="text/css" media="all">
<link href="css/kbase-2.css" rel="stylesheet" type="text/css" media="all" />
<style>
.donorbox
{
width:550px;
text-align:left;
}

#rbox_r
{
	width:550px;
	border:1.5px solid #900000;
	background-color:#500000;
	padding:5px;
} 
</style>
<?php include('includes/google_analytics.html'); ?>
</head>

		<div id="body">
                <?php $base->getNavBar($username, $path, $rank); ?>
                <br/><br/>
		<div style="text-align: center; background: none;">
				<div class="titleframe e">
				<b>Donate</b><br>
				<a href="index.php" class=c>Main Menu</a>
				</div>
			</div>

			
			<img class="widescroll-top" src="img/scroll/backdrop_765_top.gif" alt="" width="765" height="50" />
			<div class="widescroll">
			<div class="widescroll-bgimg">
			<div class="widescroll-content">
			<center>
			<div class="donorbox">
			I want to express my appreciation for your generosity in support of RuneCentre.com. Your personal donation is incredibly helpful and will allow us to reach our goal of bringing back the good old days. Your account should be automatically changed to a donator account soon. Thank you from all of us here at RuneCentre.com
                        <br/><br/>
                        Sincerely,
                        <br/>
                        Mod Zynna
			<br/>
			</center>
			<div style="clear: both;"></div>
			</div>
			</div>
			</div>
			<img class="widescroll-bottom" src="img/scroll/backdrop_765_bottom.gif" alt="" width="765" height="50" />
			<div class="tandc"><?php echo $data['wb_foot']; ?></div>
	</div>
	</body>
</html>