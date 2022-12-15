<?php require_once("_inc/variables.inc.php"); ?>
<?php require_once('../Connections/db_conn.php'); ?>
<?php 
if ($page == "logout") {require_once("_inc/logout.inc.php");}
if ($inc == "login") {require_once("_inc/login.inc.php");}
if ($inc != "login") {require_once("_inc/validate.inc.php");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$sitetitle"; ?></title>
<link href="../_css/general.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td class="bg_l"></td>
    <td><table width="900" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
      <tr>
        <td class="header"><?php include("../_inc/header.inc.php");?></td>
      </tr>
      <tr>
        <td id="top_nav" align="center" class="nav"><?php if ($inc != "login") {include("../_inc/h_drop_nav.php");} ?></td>
      </tr>
      <tr>
        <td id="content"><?php include("_inc/$inc.php"); ?></td>
      </tr>
      <tr>
        <td><?php include("../_inc/footer.inc.php"); ?></td>
      </tr>
    </table></td>
    <td class="bg_r"></td>
  </tr>
  <tr>
    <td class="bg_bl"></td>
    <td class="bg_b"></td>
    <td class="bg_br"></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>