<?php if ($complete != 1) {?>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<?php } ?>
<table border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td bgcolor="#CC9900">
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">About Nu Start</a>
      <ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="wedo.html">What do we do?</a></li>
        <li><a href="aims.html">Aims</a></li>
        <li><a href="objectives.html">Objectives</a></li>
        <li><a href="team.html">The Team</a></li>
        <?php if ($admin != '1') { echo '<li><a href="contact.html">Contact Us</a></li>'; } ?>
      </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#">News & Events</a>
      <ul>
        <?php if ($admin != '1') { echo '<li><a href="events.html">Events Calendar</a></li>'; } ?>
        <li><a href="news.html">News / Updates</a></li>
      </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#">Courses</a>
      <ul>
        <li><a href="courses.html">Courses</a></li>
        <li><a href="women.html">Women's Only Service</a></li>
        <li><a href="music.html">Music and Film</a></li>
      </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="#">Projects</a>
      <ul>
        <li><a href="substance.html">Substance Misuse</a></li>
        <li><a href="youth.html">Youth Crime</a></li>
      </ul>
  </li>
  <li><a href="links.html">Links</a></li>
  
  <?php if ($admin == '1') { echo '<li><a href="logout.html">Logout</a></li>'; } else { echo '<li><a href="contact.html">Contact Us</a></li>'; } ?>
</ul>    </td>
  </tr>
</table>
<?php if ($complete == '0') {?>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
<?php } ?>