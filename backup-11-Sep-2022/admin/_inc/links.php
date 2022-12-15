<?php if ($page == NULL) {?>
<?php require_once('../../Connections/db_conn.php'); ?>
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
$a = substr(strrchr($_SERVER['REQUEST_URI'], "s"), 1,-5);

if ($a != 'a') {
$a = substr(strrchr($_SERVER['REQUEST_URI'], "s"), 1,-9);
}
if ($a == 'e') {
$id = substr(strrchr($_SERVER['REQUEST_URI'], "s"), 2,-5);
}
/*
echo $a;
echo "<br>";
echo $id;
*/
?>
<?php
$maxRows_rs_list = 10;
$pageNum_rs_list = 0;
if (isset($_GET['pageNum_rs_list'])) {
  $pageNum_rs_list = $_GET['pageNum_rs_list'];
}
$startRow_rs_list = $pageNum_rs_list * $maxRows_rs_list;

mysql_select_db($database_db_conn, $db_conn);
$query_rs_list = "SELECT *  FROM links_tb ORDER BY title ASC";
$query_limit_rs_list = sprintf("%s LIMIT %d, %d", $query_rs_list, $startRow_rs_list, $maxRows_rs_list);
$rs_list = mysql_query($query_limit_rs_list, $db_conn) or die(mysql_error());
$row_rs_list = mysql_fetch_assoc($rs_list);

if (isset($_GET['totalRows_rs_list'])) {
  $totalRows_rs_list = $_GET['totalRows_rs_list'];
} else {
  $all_rs_list = mysql_query($query_rs_list);
  $totalRows_rs_list = mysql_num_rows($all_rs_list);
}
$totalPages_rs_list = ceil($totalRows_rs_list/$maxRows_rs_list)-1;
?>
<?php
    function detailsDateFormat( $value ){
        $d = explode("-", $value);
        $cdate = date ("d.m.Y", mktime (0,0,0,$d[1],$d[2],$d[0]));
        echo $cdate;
    }
//-----Enter date format like mysql date (e.g. 2000-01-30)------//
// command is detailsDateFormat("2008-03-17");
//Output like: Monday March 17, 2008
?>
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" id="admin_news">
  <tr>
    <td>&nbsp;</td>
  </tr>
<?php if ($a == NULL){?>
  <tr>
    <td><table width="550" border="0" align="center" cellpadding="0" cellspacing="0">

      <tr>
        <td class="title_sub">Title</td>
        <td width="100" class="title_sub_ext">Active</td>
        <td colspan="2"><a href="linksa.html">Add More Links</a></td>
        </tr>
      <?php do { ?>
      <tr bgcolor="#DECDED">
        <td>&nbsp;&nbsp;<?php echo stripslashes($row_rs_list['title']); ?></td>
        <td>&nbsp;&nbsp;<?php if ($row_rs_list['active'] == 1) {echo "Yes";} else {echo "No";} ?></td>
        <td width="55"><a href="linkse<?php echo $row_rs_list['id']; ?>.html">Edit</a></td>
        <td width="50"><a href="_inc/db_conn.php?p=links&a=d&id=<?php echo $row_rs_list['id']; ?>" class="link">Delete</a></td>
      </tr>
      <tr>
        <td height="5" colspan="4"></td>
      </tr>
      <?php } while ($row_rs_list = mysql_fetch_assoc($rs_list)); ?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
<?php } ?>
<?php if ($a != NULL){?>
<?php
mysql_select_db($database_db_conn, $db_conn);
$query_rs_item = "SELECT * FROM links_tb WHERE id = '$id'";
$rs_item = mysql_query($query_rs_item, $db_conn) or die(mysql_error());
$row_rs_item = mysql_fetch_assoc($rs_item);
$totalRows_rs_item = mysql_num_rows($rs_item);
?>
  <tr>
    <td><form action="_inc/db_conn.php" method="post" enctype="multipart/form-data" name="form">
      <table border="0" align="center" cellpadding="0" cellspacing="0" id="admin_news">
        <tr>
          <td colspan="2" class="title_sub"><?php if ($a == 'a'){echo "Add";} if ($a == 'e'){echo "Edit";} ?> Links</td>
          <td align="right" class="link">&nbsp;&nbsp;&nbsp;&nbsp;<a href="links.html">Back to list</a> &nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
          <td width="100" class="title_sub_ext">Title</td>
          <td colspan="2"><input name="title" type="text" id="title" value="<?php echo stripslashes($row_rs_item['title']); ?>"></td>
        </tr>

        <tr>
          <td class="title_sub_ext">Address</td>
          <td colspan="2"><input name="url" type="text" id="url" value="<?php if ($row_rs_item['url'] == NULL) {echo "www.";} if ($row_rs_item['url'] != "www."){echo stripslashes($row_rs_item['url']);} else {echo "www.";} ?>" /></td>
        </tr>

<?php if ($a == 'a') { ?>
        <tr>
          <td class="title_sub_ext">Image</td>
          <td colspan="2"><input name="image" type="file" class="file" id="image" size="50" /></td>
        </tr>
<?php } ?>
<?php if ($a == 'z') {  // if ($a == 'a') { Deactivated?>
        <tr>
          <td valign="top" class="title_sub_ext">Image</td>
          <td colspan="2"><textarea name="info" rows="8" id="info"><?php echo stripslashes($row_rs_item['img']); ?></textarea></td>
        </tr>
<?php } ?>
        <tr>
          <td height="5" colspan="3"></td>
          </tr>
        <tr>
          <td width="100" class="title_sub_ext">Active</td>
          <td colspan="2"><select name="active" id="active">
            <option value="1" <?php if (!(strcmp(1, $row_rs_item['active']))) {echo "selected=\"selected\"";} ?>>Yes</option>
            <option value="0" <?php if (!(strcmp(0, $row_rs_item['active']))) {echo "selected=\"selected\"";} ?>>No</option>
          </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="200"><input name="p" type="hidden" id="p" value="links">
            <input name="a" type="hidden" id="a" value="<?php echo $a;?>">
            <input name="id" type="hidden" id="id" value="<?php echo $row_rs_item['id']; ?>" /></td>
          <td><input type="submit" name="Submit" value="Submit Changes" class="button"></td>
        </tr>
      </table>
            </form>
    </td>
  </tr>
<?php mysql_free_result($rs_item); ?>
<?php } ?>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
mysql_free_result($rs_list);
?>
