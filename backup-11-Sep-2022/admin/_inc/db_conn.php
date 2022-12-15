<?php require_once('../../Connections/db_conn.php'); ?>
<?php require_once("validate.inc.php"); ?>
<?php // Standard variables
$page = '';
if (isset ($_GET['p'])) {
	$page = stripslashes($_GET['p']);
}
if (isset ($_POST['p'])) {
	$page = stripslashes($_POST['p']);
}
if (isset ($_GET['id'])) {
	$id = stripslashes($_GET['id']);
}
if (isset ($_POST['id'])) {
	$id = stripslashes($_POST['id']);
}
if (isset ($_GET['a'])) {
	$action = stripslashes($_GET['a']);
}
if (isset ($_POST['a'])) {
	$action = stripslashes($_POST['a']);
}
if (isset ($_POST['info'])) {
	$info = addslashes(strip_tags($_POST['info']));
}
?>
<?php
if ($page == "pass") {  // Admin password change
$colname_rs_pass_chk = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_rs_pass_chk = (get_magic_quotes_gpc()) ? $_SESSION['MM_Username'] : addslashes($_SESSION['MM_Username']);
}
mysql_select_db($database_db_conn, $db_conn);
$query_rs_pass_chk = sprintf("SELECT password FROM users_tb WHERE login = %s", GetSQLValueString($colname_rs_pass_chk, "text"));
$rs_pass_chk = mysql_query($query_rs_pass_chk, $db_conn) or die(mysql_error());
$row_rs_pass_chk = mysql_fetch_assoc($rs_pass_chk);
$totalRows_rs_pass_chk = mysql_num_rows($rs_pass_chk);
$pass = $row_rs_pass_chk['password'];
mysql_free_result($rs_pass_chk);
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$pass3 = $_POST['pass3'];

if($pass1 != $pass) {
header("Location: ../password1.html");
}
if($pass2 != $pass3) {
header("Location: ../password2.html");
}
if ($pass2 == $pass3){
if ($pass1 == $pass){
$updateSQL = sprintf("UPDATE users_tb SET `password` = '$pass2' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error());
  
header("Location: ../password3.html");
}}
}

if ($page == "e_address") { // contact email address changes
if ($action == "add") {
$info = addslashes($_POST['info']);
$insertSQL = sprintf("INSERT INTO contact_tb (type, info) VALUES ('2', '$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());

header("Location: ../contact.html");
}
if ($action == "del") {
$deleteSQL = sprintf("DELETE FROM contact_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../contact.html");
}
}

if ($page == "cont_num") { // contact number changes
if ($action == "add") {
$info = addslashes($_POST['info']);
$insertSQL = sprintf("INSERT INTO contact_tb (type, info) VALUES ('1', '$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());

header("Location: ../contact.html");
}

if ($action == "del") {
$deleteSQL = sprintf("DELETE FROM contact_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../contact.html");
}
}

if ($page == "cont_add") { // contact address change
$info = strip_tags($_POST['info']);
$updateSQL = sprintf("UPDATE contact_tb SET info = '$info' WHERE type = '3'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../contact.html");
}

if ($page == "form_email") { // contact form email change
$info = strip_tags($_POST['info']);
$updateSQL = sprintf("UPDATE contact_email_tb SET emailto = '$info' WHERE id = '1'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../contact.html");
}

if ($page == "form_subject") { // contact form subject changes
if ($action == "add") {
$insertSQL = sprintf("INSERT INTO contact_subject_tb (text) VALUES ('$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());

header("Location: ../contact.html");
}

if ($action == "del") {
$deleteSQL = sprintf("DELETE FROM contact_subject_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../contact.html");
}
}

if ($page == "news") { // News changes
if ($action == "a") {
$title = addslashes($_POST['title']);
$extracted = addslashes($_POST['extracted']);
$date = date("Y-m-d");
  
// For insert new record into DB with img
$msize = 175; // the main height
$tsize = 45; // the thumbnail height
$filedir = '../../_img/news/'; // the directory for the mainimage
$thumbdir = ''; // the directory for the thumbnail image
//	$prefix = 'small_'; // the prefix to be added to the thumbnail name
$tablename = "news_tb"; // DB table name

$main_img = 'Y'; // main image active Y for yes or N for no
$thumb_img = 'N'; // thumb image active Y for yes or N for no

mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);
//$totalRows_rs_status = mysql_num_rows($rs_status);
$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 4, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];
mysql_free_result($rs_next);

	$id = $next_increment;
	$maxfile = '2000000';
	$mode = '0666';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];
	
	if (isset($_FILES['image']['name'])) 
	{

		$extension = strtolower(strrchr($userfile_name,"."));
		$rename = "$id$extension";
	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$rename;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 
		
// main image resize
if ($main_img == 'Y') 
{
		if ($sizes[1] <= $msize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $msize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
	//	imagedestroy($destimg); // not required as file is reused
}
		
// thumbnail resize
if ($thumb_img == 'Y')
{
		if ($sizes[1] <= $tsize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $tsize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
}
		imagedestroy($destimg);
	}

$insertSQL = sprintf("INSERT INTO news_tb (title, date_added, extracted, info) VALUES ('$title', '$date', '$extracted', '$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
	
if (isset($userfile_name)) {
$updateSQL = sprintf("UPDATE $tablename SET filename = '$rename', thumbnail = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}

header("Location: ../news.html");
}

if ($action == "e") {
$title = addslashes($_POST['title']);
$extracted = addslashes($_POST['extracted']);

$updateSQL = sprintf("UPDATE news_tb SET title = '$title', extracted = '$extracted', info = '$info' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../news.html");
}

if ($action == "d") {
$deleteSQL = sprintf("DELETE FROM news_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../news.html");
}
}

if ($page == "gal_item") { // Gallery Item changes

// Globals
$msize = 300; // the main height
$tsize = 45; // the thumbnail height
$filedir = '../../_img/gallery/'; // the directory for the original image
$thumbdir = '../../_img/gallery/thumbnails/'; // the directory for the thumbnail image
//	$prefix = 'small_'; // the prefix to be added to the original name
$tablename = "gallery_tb"; // DB table name

$main_img = 'Y'; // main image active Y for yes or N for no
$thumb_img = 'Y'; // thumb image active Y for yes or N for no


if ($action == 'a') {

if ($action == 'a') { // if insert - start
mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);

$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 4, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];

$id = $next_increment;
	
mysql_free_result($rs_next);
} // if insert - end

	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];


	
if ($_FILES['image']['name'] != NULL) // if file upload - start
{
// Globals
		$maxfile = '4000000';
		$mode = '0666';		
		$extension = strtolower(strrchr($userfile_name,"."));
		$rename = "$id$prefix$extension";	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$rename;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 

	if ($main_img == 'Y') { // main image resize - start

		$size = $msize; // get image size of img
		if ($sizes[1] <= $size)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $size;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height) or die('Problem In Creating image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
		imagedestroy($destimg);
	} // main image resize - end


	if ($thumb_img == 'Y') { // thumbnail resize - start

		$size = $tsize; // the thumbnail height
		if ($sizes[1] <= $size)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $size;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height) or die('Problem In Creating image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
		imagedestroy($destimg);
	} // thumbnail resize - end

} // if file upload - end

if ($action == 'a') { // if insert - start
$insertSQL = sprintf("INSERT INTO $tablename (info) VALUES ('$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
} // if insert - start

if ($action == 'e') { // if update - start
$updateSQL = sprintf("UPDATE $tablename SET info = '$info' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
} // if update - end

if ($_FILES['image']['name'] != NULL) { // if file upload - DB entry - start

if ($main_img == 'Y') { // if main image update - start
$updateSQL = sprintf("UPDATE $tablename SET thumbnail = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
} // if main insert - end

if ($thumb_img == 'Y') { // if thumb image update - start
$updateSQL = sprintf("UPDATE $tablename SET filename = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}  // if thumb insert - end

}// if file upload - DB entry - end

header("Location: ../gallery.html");

}

if ($action == 'e') {

if ($action == 'a') { // if insert - start
mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);

$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 4, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];

$id = $next_increment;
	
mysql_free_result($rs_next);
} // if insert - end

	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];


	
if ($_FILES['image']['name'] != NULL) // if file upload - start
{
// Globals
		$maxfile = '4000000';
		$mode = '0666';		
		$extension = strtolower(strrchr($userfile_name,"."));
		$rename = "$id$prefix$extension";	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$rename;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 

	if ($main_img == 'Y') { // main image resize - start

		$size = $msize; // get image size of img
		if ($sizes[1] <= $size)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $size;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height) or die('Problem In Creating image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
		imagedestroy($destimg);
	} // main image resize - end


	if ($thumb_img == 'Y') { // thumbnail resize - start

		$size = $tsize; // the thumbnail height
		if ($sizes[1] <= $size)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $size;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height) or die('Problem In Creating image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
		imagedestroy($destimg);
	} // thumbnail resize - end

} // if file upload - end

if ($action == 'a') { // if insert - start
$insertSQL = sprintf("INSERT INTO $tablename (info) VALUES ('$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
} // if insert - start

if ($action == 'e') { // if update - start
$updateSQL = sprintf("UPDATE $tablename SET info = '$info' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
} // if update - end

if ($_FILES['image']['name'] != NULL) { // if file upload - DB entry - start

if ($main_img == 'Y') { // if main image update - start
$updateSQL = sprintf("UPDATE $tablename SET thumbnail = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
} // if main insert - end

if ($thumb_img == 'Y') { // if thumb image update - start
$updateSQL = sprintf("UPDATE $tablename SET filename = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}  // if thumb insert - end

}// if file upload - DB entry - end

header("Location: ../gallery.html");

}

if ($action == "d") {
mysql_select_db($database_db_conn, $db_conn);
$query_rs_gal_items = "SELECT id, filename, thumbnail FROM gallery_tb WHERE id = $id";
$rs_gal_items = mysql_query($query_rs_gal_items, $db_conn) or die(mysql_error());
$row_rs_gal_items = mysql_fetch_assoc($rs_gal_items);
$totalRows_rs_gal_items = mysql_num_rows($rs_gal_items);

$gid = $row_rs_gal_items['id'];

$file = $row_rs_gal_items['filename'];
if ($file != "") {
$file = "$filedir$file";
if (file_exists($file)) {
 unlink($file);
}
}
$thumb = $row_rs_gal_items['thumbnail'];
if ($thumb != "") {
$thumb = "$thumbdir$thumb";
if (file_exists($thumb)) {
 unlink($thumb);
}
}

$deleteSQL = sprintf("DELETE FROM gallery_tb WHERE id = '$gid'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../gallery.html");
}
}

if ($page == "paypal_email") { // contact form email change
$info = strip_tags($_POST['info']);
$updateSQL = sprintf("UPDATE shop_owner_tb SET pp_email_ad = '$info' WHERE id = '1'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../shop.html");
}

if ($page == "shop_item") { // Shop Item changes

$title = addslashes($_POST['title']);
$subtitle = addslashes($_POST['subtitle']);
$price = $_POST['price'];
$itemcode = addslashes($_POST['itemcode']);
$short = addslashes($_POST['short']);
$full = addslashes($_POST['full']);

if ($action == "a") {
// For insert new record into gallery
$msize = 175; // the main height
$tsize = 90; // the thumbnail height
$filedir = '../../shop_img/'; // the directory for the mainimage
$thumbdir = '../../shop_img/'; // the directory for the thumbnail image
$prefix = '_tb'; // the prefix to be added to the thumbnail name
$tablename = "shop_items_tb"; // DB table name

$main_img = 'Y'; // main image active Y for yes or N for no
$thumb_img = 'Y'; // thumb image active Y for yes or N for no

mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);
//$totalRows_rs_status = mysql_num_rows($rs_status);
$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 4, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];
mysql_free_result($rs_next);

	if ($_FILES['image']['name'] != NULL) 
	{
	$id = $next_increment;
	$maxfile = '2000000';
	$mode = '0666';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];
	
	$extension = strtolower(strrchr($userfile_name,"."));
	$rename = "$id$extension";
	$renametb = "$id$prefix$extension";
	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$renametb;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 
		
// main image resize
if ($main_img == 'Y') 
{
		if ($sizes[1] <= $msize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $msize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
	//	imagedestroy($destimg); // not required as file is reused
}
		
// thumbnail resize
if ($thumb_img == 'Y')
{
		if ($sizes[1] <= $tsize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $tsize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
}
		imagedestroy($destimg);
	}

$insertSQL = sprintf("INSERT INTO $tablename (itemcode, title, sub_title, description_short, description_full, price) VALUES ('$itemcode', '$title', '$subtitle', '$short', '$full', '$price')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());

if (isset($userfile_name)) {
$updateSQL = sprintf("UPDATE $tablename SET img_lg = '$rename', img_sm = '$renametb' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}
 header("Location: ../shop.html");
}

if ($action == "e") {
// For update record in gallery
$msize = 175; // the main height
$tsize = 90; // the thumbnail height
$filedir = '../../shop_img/'; // the directory for the mainimage
$thumbdir = '../../shop_img/'; // the directory for the thumbnail image
$prefix = '_tb'; // the prefix to be added to the thumbnail name
$tablename = "shop_items_tb"; // DB table name

$main_img = 'Y'; // main image active Y for yes or N for no
$thumb_img = 'Y'; // thumb image active Y for yes or N for no

	if ($_FILES['image']['name'] != NULL) 
	{
	$maxfile = '2000000';
	$mode = '0666';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];
	
	$extension = strtolower(strrchr($userfile_name,"."));
	$rename = "$id$extension";
	$renametb = "$id$prefix$extension";
	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$renametb;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 
		
// main image resize
if ($main_img == 'Y') 
{
		if ($sizes[1] <= $msize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $msize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
	//	imagedestroy($destimg); // not required as file is reused
}
		
// thumbnail resize
if ($thumb_img == 'Y')
{
		if ($sizes[1] <= $tsize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $tsize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
}
		imagedestroy($destimg);
	}

if (isset($userfile_name)) {
$updateSQL = sprintf("UPDATE $tablename SET filename = '$rename', thumbnail = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}

$updateSQL = sprintf("UPDATE $tablename SET itemcode = '$itemcode', title = '$title', sub_title = '$subtitle', description_short = '$short', description_full = '$full', price = '$price' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../shop.html");
}

if ($action == "d") {
mysql_select_db($database_db_conn, $db_conn);
$query_rs_items = "SELECT id, img_lg, img_sm FROM shop_items_tb WHERE id = $id";
$rs_items = mysql_query($query_rs_items, $db_conn) or die(mysql_error());
$row_rs_items = mysql_fetch_assoc($rs_items);
$totalRows_rs_items = mysql_num_rows($rs_items);

$filedir = '../../shop_img/'; // the directory for the original image
$thumbdir = '../../shop_img/'; // the directory for the thumbnail image

$gid = $row_rs_items['id'];

$file = $row_rs_items['img_lg'];
if ($file != "") {
$file = "$filedir$file";
if (file_exists($file)) {
 unlink($file);
}
}
$thumb = $row_rs_items['img_sm'];
if ($thumb != "") {
$thumb = "$thumbdir$thumb";
if (file_exists($thumb)) {
 unlink($thumb);
}
}

$deleteSQL = sprintf("DELETE FROM shop_items_tb WHERE id = '$gid'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../shop.html");
}
}

if ($page == "events") { // Events changes
if ($action == "a") {
$title = addslashes($_POST['title']);
$location = addslashes($_POST['location']);
//$date = date("Y-m-d");
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$info = addslashes($_POST['info']);
$link = "".str_pad($day,2,"0",STR_PAD_LEFT)."".str_pad($month,2,"0",STR_PAD_LEFT)."".$year."";

// For insert new record into DB with img
$msize = 175; // the main height
$tsize = 45; // the thumbnail height
$filedir = '../../_img/news/'; // the directory for the mainimage
$thumbdir = ''; // the directory for the thumbnail image
//	$prefix = 'small_'; // the prefix to be added to the thumbnail name
$tablename = "news_tb"; // DB table name

$main_img = 'N'; // main image active Y for yes or N for no
$thumb_img = 'N'; // thumb image active Y for yes or N for no

mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);
//$totalRows_rs_status = mysql_num_rows($rs_status);
$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 4, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];
mysql_free_result($rs_next);

	$id = $next_increment;
	$maxfile = '2000000';
	$mode = '0666';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];
	
	if (isset($_FILES['image']['name'])) 
	{

		$extension = strtolower(strrchr($userfile_name,"."));
		$rename = "$id$extension";
	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$rename;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 
		
// main image resize
if ($main_img == 'Y') 
{
		if ($sizes[1] <= $msize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $msize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
	//	imagedestroy($destimg); // not required as file is reused
}
		
// thumbnail resize
if ($thumb_img == 'Y')
{
		if ($sizes[1] <= $tsize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $tsize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
}
		imagedestroy($destimg);
	}

$insertSQL = sprintf("INSERT INTO calendar_tb (day, month, year, link, title, location, details) VALUES ('$day', '$month', '$year', '$link', '$title', '$location', '$info')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
	
if (isset($userfile_name)) {
$updateSQL = sprintf("UPDATE $tablename SET image = '$rename', thumbnail = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}

header("Location: ../events.html");
}

if ($action == "e") {
$title = addslashes($_POST['title']);
$location = addslashes($_POST['location']);
//$date = date("Y-m-d");
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$info = addslashes($_POST['info']);
$link = "".str_pad($day,2,"0",STR_PAD_LEFT)."".str_pad($month,2,"0",STR_PAD_LEFT)."".$year."";

$updateSQL = sprintf("UPDATE calendar_tb SET day = '$day', month = '$month', year = '$year', link = '$link', title = '$title', location = '$location', details = '$info' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../events.html");
}

if ($action == "d") {
$deleteSQL = sprintf("DELETE FROM calendar_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../events.html");
}
}

if ($page == "links") { // Links changes
if ($action == "a") {
$title = addslashes($_POST['title']);
$url = addslashes($_POST['url']);

$info = addslashes($_POST['info']);
$active = addslashes($_POST['active']);

// For insert new record into DB with img
$msize = 175; // the main height
$tsize = 45; // the thumbnail height
$filedir = '../../_img/links/'; // the directory for the mainimage
$thumbdir = ''; // the directory for the thumbnail image
//	$prefix = 'small_'; // the prefix to be added to the thumbnail name
$tablename = "links_tb"; // DB table name

$main_img = 'Y'; // main image active Y for yes or N for no
$thumb_img = 'N'; // thumb image active Y for yes or N for no

mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);
//$totalRows_rs_status = mysql_num_rows($rs_status);
$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 4, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];
mysql_free_result($rs_next);

	$id = $next_increment;
	$maxfile = '2000000';
	$mode = '0666';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];
	
	if (isset($_FILES['image']['name'])) 
	{

		$extension = strtolower(strrchr($userfile_name,"."));
		$rename = "$id$extension";
	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$rename;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 
		
// main image resize
if ($main_img == 'Y') 
{
		if ($sizes[1] <= $msize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $msize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
	//	imagedestroy($destimg); // not required as file is reused
}
		
// thumbnail resize
if ($thumb_img == 'Y')
{
		if ($sizes[1] <= $tsize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $tsize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
}
		imagedestroy($destimg);
	}

$insertSQL = sprintf("INSERT INTO links_tb (title, url, active) VALUES ('$title', '$url', '$active')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
	
if (isset($userfile_name)) {
$updateSQL = sprintf("UPDATE $tablename SET img = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}

header("Location: ../links.html");
}

if ($action == "e") {
$title = addslashes($_POST['title']);
$url = addslashes($_POST['url']);

$info = addslashes($_POST['info']);
$active = addslashes($_POST['active']);

$updateSQL = sprintf("UPDATE links_tb SET title = '$title', url = '$url', active = '$active' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../links.html");
}

if ($action == "d") {
$deleteSQL = sprintf("DELETE FROM links_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../links.html");
}
}


if ($page == "books") { // Books changes
$info = addslashes($_POST['info']);
if ($action == "a") {
$title = addslashes($_POST['title']);
$isbn = addslashes($_POST['isbn']);
  
// For insert new record into DB with img
$msize = 288; // the main height
$tsize = 45; // the thumbnail height
$filedir = '../../_img/books/'; // the directory for the mainimage
$thumbdir = ''; // the directory for the thumbnail image
//	$prefix = 'small_'; // the prefix to be added to the thumbnail name
$tablename = "books_tb"; // DB table name

$main_img = 'Y'; // main image active Y for yes or N for no
$thumb_img = 'N'; // thumb image active Y for yes or N for no

mysql_select_db($database_db_conn, $db_conn);
$query_rs_next = "SHOW TABLE STATUS LIKE '$tablename'";
$rs_next = mysql_query($query_rs_next, $db_conn) or die(mysql_error());
$row_rs_next = mysql_fetch_assoc($rs_next);
//$totalRows_rs_status = mysql_num_rows($rs_status);
$next_increment = 0;
// Padded ID
$next_increment = str_pad($row_rs_next['Auto_increment'], 11, "0", STR_PAD_LEFT);
// Non Padded ID
//$next_increment = $row_rs_next['Auto_increment'];
mysql_free_result($rs_next);

	$id = $next_increment;
	$maxfile = '2000000';
	$mode = '0666';
	$userfile_name = $_FILES['image']['name'];
	$userfile_tmp = $_FILES['image']['tmp_name'];
	$userfile_size = $_FILES['image']['size'];
	$userfile_type = $_FILES['image']['type'];
	
	if (isset($_FILES['image']['name'])) 
	{

		$extension = strtolower(strrchr($userfile_name,"."));
		$rename = "$id$extension";
	
		$prod_img = $filedir.$rename;
	//	$prod_img = $filedir.$userfile_name;
	//	$prod_img_thumb = $thumbdir.$prefix.$userfile_name;
		$prod_img_thumb = $thumbdir.$rename;
		move_uploaded_file($userfile_tmp, $prod_img);
		chmod ($prod_img, octdec($mode));
		$sizes = getimagesize($prod_img);
		$aspect_ratio = $sizes[1]/$sizes[0]; 
		
// main image resize
if ($main_img == 'Y') 
{
		if ($sizes[1] <= $msize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $msize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img,90)
			or die('Problem In saving');
	//	imagedestroy($destimg); // not required as file is reused
}
		
// thumbnail resize
if ($thumb_img == 'Y')
{
		if ($sizes[1] <= $tsize)
		{
			$new_width = $sizes[0];
			$new_height = $sizes[1];
		}else{
			$new_height = $tsize;
			$new_width = abs($new_height/$aspect_ratio);
		}

		$destimg=ImageCreateTrueColor($new_width,$new_height)
			or die('Problem In Creating image');
//		$srcimg=ImageCreateFromJPEG($prod_img)
//			or die('Problem In opening Source Image');
$srcimg = @ImageCreateFromJPEG ($prod_img) or // Read JPEG Image
$srcimg = @ImageCreateFromPNG ($prod_img) or // or PNG Image
$srcimg = @ImageCreateFromGIF ($prod_img) or // or GIF Image
$srcimg = false; // If image is not JPEG, PNG, or GIF
if (!$srcimg) {readfile ($prod_img); break;}
		if(function_exists('imagecopyresampled'))
		{
			imagecopyresampled($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}else{
			imagecopyresized($destimg,$srcimg,0,0,0,0,$new_width,$new_height,ImageSX($srcimg),ImageSY($srcimg))
			or die('Problem In resizing');
		}
		ImageJPEG($destimg,$prod_img_thumb,90)
			or die('Problem In saving');
}
		imagedestroy($destimg);
	}

$insertSQL = sprintf("INSERT INTO $tablename (title, information, isbn) VALUES ('$title', '$info', '$isbn')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
	
if (isset($userfile_name)) {
$updateSQL = sprintf("UPDATE $tablename SET img = '$rename' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 
}

header("Location: ../books.html");
}

if ($action == "e") {
$title = addslashes($_POST['title']);
$isbn = addslashes($_POST['isbn']);

$updateSQL = sprintf("UPDATE books_tb SET title = '$title', information = '$info', isbn = '$isbn' WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error()); 

header("Location: ../books.html");
}

if ($action == "d") {
$deleteSQL = sprintf("DELETE FROM books_tb WHERE id = '$id'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($deleteSQL, $db_conn) or die(mysql_error());

header("Location: ../books.html");
}
}

?>