<?php
if (!file_exists("_inc/variables.inc.php")) {
header("Location: down.php");
}
if (!file_exists("Connections/db_conn.php")) {
header("Location: down.php");
}
?>
<?php require_once("_inc/variables.inc.php"); ?>
<?php require_once('Connections/db_conn.php'); ?>
<?php
// Maintenace Mode
if ($maintance == '1') {
header("Location: down.php");
}
?>
<?php
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$name = $_POST['name'];
$comment = $_POST['comment'];
require_once("functions/randoms.php");

mysql_select_db($database_db_conn, $db_conn);
$query_rs_mail = "SELECT * FROM contact_email_tb";
$rs_mail = mysql_query($query_rs_mail, $db_conn) or die(mysql_error());
$row_rs_mail = mysql_fetch_assoc($rs_mail);
$totalRows_rs_mail = mysql_num_rows($rs_mail);

$emailto = $row_rs_mail['emailto'];
$host = $row_rs_mail['hostname'];
$username = $row_rs_mail['username'];
$password = $row_rs_mail['password'];

mysql_free_result($rs_mail);

if ($_POST['a'] == 'feedback') {
require_once("functions/mail2.php");
list($status, $message) = sendmail($email, $name, $comment, $emailto, $host, $username, $password);
}

if ($_POST['a'] == 'maillist') {
$code = get_rand_id(15);

require_once("functions/mail.php");
list($status, $message) = sendmail($email, $name, $code, $host, $username, $password);

if ($status == '1') {
$insertSQL = sprintf("INSERT INTO maillist_tb (email, name, code) VALUES ('$email', '$name', '$code')");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($insertSQL, $db_conn) or die(mysql_error());
}
}

}
?>
<?php if ($inc == "home") {
	include("_inc/home.php");
} else {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$sitetitle"; ?></title>
<link href="_css/general.css" rel="stylesheet" type="text/css" />
<?php if ($head_hznav == "DD") { ?>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<?php } ?>
<?php if ($content != "CO") { ?>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<?php } ?>
<?php if ($content == "FTP") { ?>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<?php } ?>
<?php if ($content == "FAC") { ?>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<?php } ?>

</head>
<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" class="header"><?php include("_inc/header.inc.php");?></td>
  </tr><?php if ($head_hznav != '') {?>
  <tr>
    <td colspan="3"><?php if ($head_hznav == 'ND') {include("_inc/hnav.inc.php");} if ($head_hznav == 'DD') {include("_inc/h_drop_nav.php");}?></td>
  </tr> <?php } ?>
  <tr>
    <td width="10%"></td>
    <td></td>
    <td width="20%"></td>
  </tr>
<?php if ($content == 'FTP') {?>
  <tr>
    <td valign="top"><?php include("_inc/v_drop_nav.php");?></td>
    <td id="content"><?php include("_inc/$inc.php"); ?></td>
    <td valign="top"><?php include("_inc/tab_panel.inc.php");?></td>
  </tr>
<?php } ?>
<?php if ($content == 'FAC') {?>
  <tr>
    <td valign="top"><?php include("_inc/v_drop_nav.php");?></td>
    <td id="content"><?php include("_inc/$inc.php"); ?></td>
    <td valign="top"><div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Label 1</div>
        <div class="AccordionPanelContent">Content 1</div>
      </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Label 2</div>
        <div class="AccordionPanelContent">Content 2</div>
      </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Label 3</div>
        <div class="AccordionPanelContent">Content 3</div>
      </div>
    </div></td>
  </tr>
<?php } ?>
<?php if ($content == 'E') {?>
  <tr>
    <td colspan="2" id="content">&nbsp;</td>
    <td id="content">&nbsp;</td>
  </tr>
<?php } ?>
<?php if ($content == 'VD') {?>
  <tr>
    <td valign="top"><?php include("_inc/v_drop_nav.php");?></td>
    <td colspan="2" id="content"><?php include("_inc/$inc.php"); ?></td>
  </tr>
<?php } ?>
<?php if ($content == 'CO') {?>
  <tr>
  <td valign="top"><?php include("_inc/sidebar-left.php"); ?></td>
    <td colspan="2" id="content"><?php include("_inc/$inc.php"); ?>
    
    </td>
  </tr>
<?php } ?>
  <tr>
    <td colspan="3"><?php include("_inc/footer.inc.php"); ?></td>
  </tr>
</table>
<?php if ($head_hz_nav = "DD") { ?>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
<?php } ?>
<?php if ($content != "CO") { ?>
<script type="text/javascript">
<!--
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
<?php } ?>
<?php if ($content == "FTP") { ?>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
<?php } ?>
<?php if ($content == "FAC") { ?>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
<?php } ?>

</body>
</html>
<?php } ?>