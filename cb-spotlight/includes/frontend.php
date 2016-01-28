<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 *  
 */

?>
<?php if($settings->cb_spotlight_cb_spotlight_form_field_repeater){ ?> 
	<div class="cb-spotlight-spn-gallery">

      <div class="cb-spotlight-spn-image">
       <img src="<?php echo $settings->cb_spotlight_cb_spotlight_form_field_repeater[0]->cb_spotlight_photo_field_src; ?>" alt="" id="cb-spotlight-spn-img"/>
      </div>


      <div class="cb-spotlight-spn-links">
					<?php foreach($settings->cb_spotlight_cb_spotlight_form_field_repeater as $current_form){	?>

							 <a class="cb-spotlight-spn-link" data-img-src="<?php echo $current_form->cb_spotlight_photo_field_src; ?>"><?php echo $current_form->cb_spotlight_text_field; ?></a>
					<?php	} ?>
  		</div>

      
	</div>
<?php} ?>