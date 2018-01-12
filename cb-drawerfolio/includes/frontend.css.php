/**
 * This file should contain frontend styles that
 * will be applied to individual module instances.
 *
 * You have access to three variables in this file:
 *
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
 *
 * Example:
 */


.fl-node-<?php echo $id; ?> .cb-drawerfolio .caption{
  color: #<?php echo $settings->caption_text_color; ?>;
  background-color: #<?php echo $settings->caption_bg_color; ?>;
}

.fl-node-<?php echo $id; ?> .cb-drawerfolio > ul > li{
  height: <?php echo $settings->photo_height; ?>px;
}

.fl-node-<?php echo $id; ?> .cb-drawerfolio > ul > li .inner{
  height: <?php echo $settings->photo_height; ?>px;
}
.fl-node-<?php echo $id; ?> .cb-drawerfolio li:hover .caption{
  background-color: #<?php echo $settings->caption_bg_hover_color; ?>;
}
.fl-node-<?php echo $id; ?> .cb-drawerfolio li.show .caption{
  background-color: #<?php echo $settings->caption_bg_hover_color; ?>;
}
.fl-node-<?php echo $id; ?> .cb-drawerfolio .drawer{
  background-color: #<?php echo $settings->drawer_bg_color; ?>;
}
.fl-node-<?php echo $id; ?> .cb-drawerfolio .drawer{
  color: #<?php echo $settings->drawer_text_color; ?>;
}
@media(min-width:<?php echo $module->responsive_breakpoint(); ?>px){
  .fl-node-<?php echo $id; ?> .cb-drawerfolio > ul > li{
    width: 33.333333333%;
  }
}
@media(min-width:1080px){
  .fl-node-<?php echo $id; ?> .cb-drawerfolio > ul > li{
    width: 20%;
  }
}
