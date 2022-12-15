<?php if ($complete != 1) {?>
<?php require_once('../Connections/db_conn.php'); ?>
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
?>
<?php } ?>
<?php
mysql_select_db($database_db_conn, $db_conn);
$query_rs_nav = "SELECT * FROM nav_tb";
$rs_nav = mysql_query($query_rs_nav, $db_conn) or die(mysql_error());
$row_rs_nav = mysql_fetch_assoc($rs_nav);
$totalRows_rs_nav = mysql_num_rows($rs_nav);
?>
<table width="170" border="0" cellspacing="0" cellpadding="0" id="nav">
  <?php do { ?>
    <tr>
      <td height="3"></td>
    </tr>
      <tr>
        <td <?php if ($page == $row_rs_nav['url']) { echo "class=\"active\""; } else { echo "class=\"link\""; }?>><a href="<?php echo $row_rs_nav['url']; ?>.html" <?php if ($page == $row_rs_nav['url']) { echo "class=\"navactive\""; } else { echo "class=\"navlink\""; }?>><?php echo $row_rs_nav['title']; ?></a></td>
      </tr>
      <?php } while ($row_rs_nav = mysql_fetch_assoc($rs_nav)); ?>
      <tr>
      <td height="5"></td>
      </tr>
      <tr>
      <td>
      	<img src="_img/image7121.jpg" />
        <br />
		<strong>To contact us:</strong>
        <br />
		t.  08703832151
		<br />
		e. info@nustart.org
      </td>
      </tr>



  </table>
  <?php
mysql_free_result($rs_nav);
?>
