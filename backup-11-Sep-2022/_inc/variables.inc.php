<?php  
// Site configuration
$sitetitle = "Nu Start";

// for footer date
$startdate = "2009";

// Horizontal menu
// Dynamic non-drop down text based = ND 
// Drop down menu spry based = DD
$head_hznav = "DD";
// If DD then edit file _inc/h_drop_nav.php

// Content Area
// Content only - No menu or extras = CO
// Drop down menu spry based only = VD
// Drop down menu with tabbed panels = FTP
$content = "CO";

// Activate Maintenance Mode / 1 = on / 0 = off
$maintance = '0';

// Maintenance Reason
$maint_msg = 'General Maintenance';
?>
<?php
// used to deactivate DB file links when site is complete
$complete = 1;

$page = '';

// for _GET usage
if (isset ($_GET['p'])) {
	$page = stripslashes($_GET['p']);
}

/*

// for htaccess usage
if (isset ($_SERVER['REQUEST_URI'])) {
if (substr($_SERVER['REQUEST_URI'],1,-6) == "profile") {
	$page = "profile";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-22) == "verify") {
	$page = "verify";
} else {
	$page = substr($_SERVER['REQUEST_URI'],1,-5);
}
}
*/

if ($page == "home"){
	$inc = "home";
}
// comment out if using DB Navigation - start

elseif ($page == "mission"){ // link name
	$inc = "mission"; // file name
}
elseif ($page == "about"){
	$inc = "about";
}
elseif ($page == "wedo"){
	$inc = "wedo";
}
elseif ($page == "aims"){
	$inc = "aims";
}
elseif ($page == "objectives"){
	$inc = "objectives";
}
elseif ($page == "substance"){
	$inc = "substance";
}
elseif ($page == "youth"){
	$inc = "youth";
}
elseif ($page == "courses"){
	$inc = "courses";
}
elseif ($page == "women"){
	$inc = "women";
}
elseif ($page == "music"){
	$inc = "music";
}
elseif ($page == "membership"){
	$inc = "membership";
}
elseif ($page == "events"){
	$inc = "events";
}
elseif ($page == "news"){
	$inc = "news";
}
elseif ($page == "team"){
	$inc = "team";
}
elseif ($page == "links"){
	$inc = "links";
}
elseif ($page == "contact"){
	$inc = "contact";
}
// comment out if using DB Navigation - end
else {
    $page = "home";    //set default value
    $inc = "home";    //set default value
}
?>