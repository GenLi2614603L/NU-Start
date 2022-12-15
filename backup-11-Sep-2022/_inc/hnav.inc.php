<?php if ($complete != 1) {?>
<?php require_once('../Connections/db_conn.php'); ?>
<?php } ?>

<?php 
if ($head_hznav == "ND") {
// Dynamic horizontal menu - non-dropdown

mysql_select_db($database_db_conn, $db_conn);
$query_rs_t_nav = "SELECT * FROM nav_tb WHERE loc = '1'";
$rs_t_nav = mysql_query($query_rs_t_nav, $db_conn) or die(mysql_error());
$row_rs_t_nav = mysql_fetch_assoc($rs_t_nav);
$totalRows_rs_t_nav = mysql_num_rows($rs_t_nav);

echo "
<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td align=\"center\" id=\"top_nav\">";

 do {
 echo "<span class=\"link\">&nbsp;<a href=\"".strtolower($row_rs_t_nav['url']). ".html \">". $row_rs_t_nav['title'] ."</a>&nbsp;</span>";
 if ($row_rs_t_nav['pos'] == 1) {
 echo "<span class=\"link\">|</span> ";
 } 
 } while ($row_rs_t_nav = mysql_fetch_assoc($rs_t_nav)); echo "</td>
  </tr>
  </table>"; 
  
mysql_free_result($rs_t_nav);  
}
  ?>
<?php 
if ($head_hznav == "DD") {
// Horizontal drop down menu

include("_inc/h_drop_nav.php");

}
 ?>  

