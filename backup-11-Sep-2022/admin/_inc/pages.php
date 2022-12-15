<?php require_once('../Connections/db_conn.php'); ?>
<?php
if (isset($_POST['Submit'])) {

$c1_title = addslashes($_POST['c1_title']);
$spaw1 = addslashes($_POST['spaw1']);

$updateSQL = sprintf("UPDATE pages_tb SET `c1_title` = '$c1_title', `content1` = '$spaw1' WHERE title = '$t'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error());
  
if ($_POST['spaw2'] != NULL) {
$c2_title = addslashes($_POST['c2_title']);
$spaw2 = addslashes($_POST['spaw2']);

$updateSQL = sprintf("UPDATE pages_tb SET `c2_title` = '$c2_title', `content2` = '$spaw2' WHERE title = '$t'");
  mysql_select_db($database_db_conn, $db_conn);
  mysql_query($updateSQL, $db_conn) or die(mysql_error());
}

echo '<center><h1>Page Updated</h1></center>';
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$_GET['t'] = $t;

$colname_rs_pages = "-1";
if (isset($_GET['t'])) {
  $colname_rs_pages = $_GET['t'];
}
mysql_select_db($database_db_conn, $db_conn);
$query_rs_pages = sprintf("SELECT * FROM pages_tb WHERE title = %s", GetSQLValueString($colname_rs_pages, "text"));
$rs_pages = mysql_query($query_rs_pages, $db_conn) or die(mysql_error());
$row_rs_pages = mysql_fetch_assoc($rs_pages);
$totalRows_rs_pages = mysql_num_rows($rs_pages);
?>
<?php
include("spaw2/spaw.inc.php");
$spaw1 = new SpawEditor("spaw1", stripslashes($row_rs_pages['content1']));
$spaw2 = new SpawEditor("spaw2", stripslashes($row_rs_pages['content2']));
?>


  <form method="post" id="pages">
  <input name="c1_title" type="text" value="<?php echo stripslashes($row_rs_pages['c1_title']); ?>" size="70" maxlength="60" autocomplete="off" class="input" /><br>
  <?php
  $spaw1->show();
  ?>
  <?php if ($row_rs_pages['content2'] != NULL) {?>
  <br><br>
  <input name="c2_title" type="text" value="<?php echo stripslashes($row_rs_pages['c2_title']); ?>" size="70" maxlength="80" autocomplete="off" class="input" /><br>
  <?php
  $spaw2->show();
  ?>
  <?php } ?><input name="t" type="hidden" value="<?php echo $t; ?>" />
  <br />
<br />
<div align="center" id="buttons"><input name="Submit" type="submit" value="Submit Changes" />&nbsp;&nbsp;<input name="Reset" type="reset" value="Undo All Changes" /></div>
  </form>
<?php
mysql_free_result($rs_pages);
?>