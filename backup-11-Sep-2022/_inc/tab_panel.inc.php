<?php if ($complete != 1) {?>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<?php } ?>
<div id="TabbedPanels1" class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0">Tab 1</li>
        <li class="TabbedPanelsTab" tabindex="0">Tab 2</li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">Content for tab 1</div>
        <div class="TabbedPanelsContent">Content for tab 2</div>
      </div>
    </div>
<?php if ($complete == '0') {?>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
<?php } ?>