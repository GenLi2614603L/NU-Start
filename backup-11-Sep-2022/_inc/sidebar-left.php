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
$query_rs_quotes = "SELECT * FROM quotes_tb ORDER BY RAND() LIMIT 0,1;";
$rs_quotes = mysql_query($query_rs_quotes, $db_conn) or die(mysql_error());
$row_rs_quotes = mysql_fetch_assoc($rs_quotes);
$totalRows_rs_quotes = mysql_num_rows($rs_quotes);
?>
<table width="170" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td><script language="javascript" src="_js/scroller.js"></script></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td height="120" id="maillist">
    <?php if ($_POST['a'] == 'maillist') {
		echo "<center><strong>$message</strong></center>";
	} else { ?>
    <form action="" method="post">
<strong>Join Our Mailing List</strong>
<br>
Be the First to Know! Sign up to our newsletter mailing list to receive updates about our programmes.
<br /><br />
<strong>Name:</strong><br /><input name="name" type="text">

<strong>Email Address:</strong><br /><input name="email" type="text">
    <br>
    <br>
      <center><input name="submit" type="submit" id="submit" value="Register"><input name="a" type="hidden" value="maillist" /></center>
    </form><?php } ?>
    </td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td class="quote"><?php echo $row_rs_quotes['quote']; ?></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td class="left_pad">
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
mysql_free_result($rs_quotes);
?>