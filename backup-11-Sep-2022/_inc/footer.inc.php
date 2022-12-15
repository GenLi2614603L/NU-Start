<table width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
<?php
$server = $HTTP_SERVER_VARS['SERVER_NAME'];
$serv_str = substr($server, 0, 4);
if ($serv_str == 'www.') {
$server = substr($server, 4);
}
elseif ($serv_str == 'desi') {
$server = substr($server, 7);
}
else {
$server = $HTTP_SERVER_VARS['SERVER_NAME'];
}
?>
      <tr>
        <td width="200">&nbsp;</td>
        <td align="center">Copyright &copy; <?php if (date("Y") > $startdate) { echo "$startdate - "; } echo date('Y'); ?>&nbsp;<?php echo $server;?>. All rights reserved.</td>
        <td width="200" align="center" nowrap>&nbsp;Site Designed By FBC WEB DESIGN&nbsp;</td>
      </tr>
</table>