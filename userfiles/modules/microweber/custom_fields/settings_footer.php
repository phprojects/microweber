
<?php 
$field_size = '';
if (isset($data['options']['field_size'])) {
	$field_size = $data['options']['field_size'];
}
?>

<div class="mw-custom-field-group">
    <label class="mw-custom-field-label" for="custom_field_width_size<?php print $rand; ?>"><b><?php _e('Width size'); ?></b></label>
    <div class="mw-custom-field-form-controls">
       <select class="mw-ui-field" name="options[field_size]">
	        <option <?php if($field_size=='extra_small'):?>selected="selected"<?php endif; ?> value="extra_small">Extra Small</option> 
	       	<option <?php if($field_size=='small'):?>selected="selected"<?php endif; ?> value="small">Small</option> 
	       	<option <?php if($field_size=='medium'):?>selected="selected"<?php endif; ?> value="medium">Medium</option> 
	       	<option <?php if($field_size=='normal'):?>selected="selected"<?php endif; ?> value="normal">Normal</option>
	        <option <?php if($field_size=='lage'):?>selected="selected"<?php endif; ?> value="lage">Large</option>
	        <option <?php if($field_size=='extra_large'):?>selected="selected"<?php endif; ?> value="extra_large">Extra Large</option> 
       </select>
    </div>
</div>

<div class="mw-custom-field-group<?php print $hidden_class ?>">
    <label class="mw-custom-field-label" for="custom_field_required<?php print $rand; ?>"><?php _e('Required'); ?></label>
    <div class="mw-custom-field-form-controls">
        <label class="mw-ui-check">


              <input type="checkbox" class="mw-ui-field"  name="custom_field_required" id="custom_field_required<?php print $rand; ?>" value="y" <?php if (trim($data['custom_field_required']) == 'y'): ?> checked="checked"  <?php endif; ?> >
              <span></span>
            </label>

            <?php _e('Is this field Required?'); ?>
    </div>
</div>
<div class="mw-custom-field-group<?php print $hidden_class ?>">
    <label class="mw-custom-field-label"><?php _e('Active'); ?></label>
    <div class="mw-custom-field-form-controls">
        <label class="radio">
            <input type="radio" class="mw-ui-field" name="custom_field_is_active"   <?php if (trim($data['custom_field_is_active']) == 'y'): ?> checked="checked"  <?php endif; ?>  value="y">
            <?php _e('Yes'); ?> </label>
        <label class="radio">
            <input type="radio" class="mw-ui-field" name="custom_field_is_active" <?php if (trim($data['custom_field_is_active']) == 'n'): ?> checked="checked"  <?php endif; ?>   value="n">
            <?php _e('No'); ?> </label>
    </div>
</div>
<div class="mw-custom-field-group<?php print $hidden_class ?>">
    <label class="mw-custom-field-label" ><?php _e('Help text'); ?></label>
    <div class="mw-custom-field-form-controls">
        <input type="text"  name="custom_field_help_text" class="mw-ui-field"   value="<?php print ($data['custom_field_help_text']) ?>"  id="custom_field_help_text<?php print $rand; ?>">
    </div>
</div>
<div class="form-actions custom-fields-form-actions">

    <script>

         __save__global_id = '#custom_fields_edit<?php print $rand; ?>';
         $(document).ready(function(){
           if(typeof __custom_fields_editor_binded == 'undefined'){
                __custom_fields_editor_binded = true;
                mw.$("#custom-field-editor").keyup(function(e){
                  if(e.target.name == 'name'){
                      $(this).find('.custom-field-edit-title strong').html(e.target.value);
                  }
                });
           }

        });


    </script>

</div>

</div>
