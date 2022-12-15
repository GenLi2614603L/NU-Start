<?php  
// Site configuration
$sitetitle = "Nu Start";

// for footer date
$startdate = "2009";

// used to deactivate DB file links when site is complete
$complete = 1;

$admin = 1;

$page = '';

$server = $_SERVER['SERVER_NAME'];
$serv_str = substr($server, 0, 4);
if ($serv_str == 'www.') {
$server = substr($server, 4);
}
elseif ($serv_str == 'demo.') {
$server = substr($server, 5);
}
else {
$server = $_SERVER['SERVER_NAME'];
}

if (isset ($_SERVER['REQUEST_URI'])) {

if ($server == 'fbc-server') {
$_SERVER['REQUEST_URI'] = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 0 );
}
if ($server == 'nustart.org') {
$_SERVER['REQUEST_URI'] = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 0 );
}

if (substr($_SERVER['REQUEST_URI'],1,-6) == "password") {
	$page = "password";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-6) == "shop"){
	$page = "shop";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-10) == "shop"){
	$page = "shop";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-6) == "news"){
	$page = "news";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-17) == "news"){
	$page = "news";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-6) == "books"){
	$page = "books";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-17) == "books"){
	$page = "books";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-6) == "gallery"){
	$page = "gallery";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-10) == "gallery"){
	$page = "gallery";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-6) == "events"){
	$page = "events";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-17) == "events"){
	$page = "events";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-6) == "links"){
	$page = "links";
}
elseif (substr($_SERVER['REQUEST_URI'],1,-10) == "links"){
	$page = "links";
}
 else {
	$page = substr($_SERVER['REQUEST_URI'],1,-5);
}
}
// echo $page;

if ($page == "login"){
	$inc = "login";
}
// comment out if using DB Navigation - start

elseif ($page == "info"){ // link name
	$inc = "info"; // file name
}
elseif ($page == "logout"){ // link name
	$inc = "login"; // file name
}
elseif ($page == "about"){ // link name
	$inc = "pages"; // file name
	$t = 'about';
}
elseif ($page == "aims"){ // link name
	$inc = "pages"; // file name
	$t = 'aims';
}
elseif ($page == "courses"){ // link name
	$inc = "pages"; // file name
	$t = 'courses';
}
elseif ($page == "membership"){ // link name
	$inc = "pages"; // file name
	$t = 'membership';
}
elseif ($page == "music"){ // link name
	$inc = "pages"; // file name
	$t = 'music';
}
elseif ($page == "news"){ // link name
	$inc = "pages"; // file name
	$t = 'news';
}
elseif ($page == "objectives"){ // link name
	$inc = "pages"; // file name
	$t = 'objectives';
}
elseif ($page == "substance"){ // link name
	$inc = "pages"; // file name
	$t = 'substance';
}
elseif ($page == "team"){ // link name
	$inc = "pages"; // file name
	$t = 'team';
}
elseif ($page == "wedo"){ // link name
	$inc = "pages"; // file name
	$t = 'wedo';
}
elseif ($page == "women"){ // link name
	$inc = "pages"; // file name
	$t = 'women';
}
elseif ($page == "youth"){ // link name
	$inc = "pages"; // file name
	$t = 'youth';
}

elseif ($page == "contact"){ // link name
	$inc = "contact"; // file name
}
elseif ($page == "password"){ // link name
	$inc = "password"; // file name
}
elseif ($page == "links"){ // link name
	$inc = "links"; // file name
}
else {
    $page = "login";    //set default value
    $inc = "login";    //set default value
}

?>