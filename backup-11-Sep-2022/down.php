<?php 
if (file_exists("_inc/variables.inc.php")) {
require_once("_inc/variables.inc.php");

// Maintenace Mode
if ($maintance == '0') {
header("Location: index.php");
}

// Maintenace Reason Message - Default Message
if ($maint_msg == '') {
$maint_msg = 'Site down for Maintenance';
}

}

// Maintenace Reason Message - Default Message with NO connection to VARS
if ($maint_msg == NULL) {
$maint_msg = 'Site down';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($sitetitle != NULL) {echo "$sitetitle";} else {echo "$maint_msg";}?></title>
<link href="_css/general.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td class="header"></td>
  </tr>
  <tr>
    <td id="down_msg">
	<?php
	echo "<strong>$maint_msg</strong><br><br>Please try back later";
	?></td>
  </tr>
  <tr>
    <td><?php include("_inc/footer.inc.php"); ?></td>
  </tr>
</table>
</body>
</html>
