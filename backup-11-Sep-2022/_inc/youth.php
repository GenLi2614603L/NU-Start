<?php require_once('Connections/db_conn.php'); ?>
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

$_GET['t'] = "youth";

$colname_rs_pages = "-1";
if (isset($_GET['t'])) {
  $colname_rs_pages = $_GET['t'];
}
mysql_select_db($database_db_conn, $db_conn);
$query_rs_pages = sprintf("SELECT * FROM pages_tb WHERE title = %s", GetSQLValueString($colname_rs_pages, "text"));
$rs_pages = mysql_query($query_rs_pages, $db_conn) or die(mysql_error());
$row_rs_pages = mysql_fetch_assoc($rs_pages);
$totalRows_rs_pages = mysql_num_rows($rs_pages);
?><table width="730" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" class="paragraph_break"><?php echo $row_rs_pages['c1_title']; ?></td>
    <td width="188" rowspan="2" align="right" valign="top"><table width="184" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="_img/image24391.jpg" width="184" height="188"></td>
      </tr>
      <tr>
        <td><img src="_img/image24371.jpg" width="184" height="188"></td>
      </tr>
      <tr>
        <td><img src="_img/image78451.jpg" width="184" height="188"></td>
      </tr>
      <tr>
        <td><img src="_img/image5091.jpg" width="184" height="188"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top">
<?php echo stripslashes($row_rs_pages['content1']); ?>
    </td>
  </tr>
  </table>
<?php
mysql_free_result($rs_pages);
?>