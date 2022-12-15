<?php if ($page == NULL) {?>
<?php require_once('../Connections/db_conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

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
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
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
$query_rs_links = "SELECT * FROM links_tb ORDER BY title ASC";
$rs_links = mysql_query($query_rs_links, $db_conn) or die(mysql_error());
$row_rs_links = mysql_fetch_assoc($rs_links);
$totalRows_rs_links = mysql_num_rows($rs_links);
?>
<table width="730" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" class="paragraph_break">Links</td>
  </tr>
  <tr>
    <td valign="top">
        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
          <?php $count = '0'; do { if ($count == '0') { echo '<tr>'; } $count = $count + 1;?>
            <td width="50%" height="150" valign="top"><a href="http://<?php echo $row_rs_links['url']; ?>"><strong><?php echo $row_rs_links['title']; ?></strong></a><br />
              <a href="http://<?php echo $row_rs_links['url']; ?>"><img src="_img/links/<?php echo $row_rs_links['img']; ?>" border="0" /></a></td><?php if ($count == '2') { echo '</tr>'; $count = '0'; } ?><?php } while ($row_rs_links = mysql_fetch_assoc($rs_links)); ?>
            
          
        </table>
        </td>
  </tr>
  </table>
<?php 
mysql_free_result($rs_links);
?>