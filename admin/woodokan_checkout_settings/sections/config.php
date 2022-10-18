<?php
$fields = json_decode(get_option( 'checkout_fields' ));
// echo '<pre>';
// print_r($fields);


// echo '</pre>';
?>									
										
										
										
										<!------ start fields editor drag and drop---->

										<div id="sidebar-1" class="widgets-sortables ui-droppable ui-sortable wd_easyorder_sortable" style="margin-top:30px;">

<?php foreach($fields as $field){ ?>
	<!--- start widget draggable --->
   <div  class="widget" style="">
      <div class="widget-top">
         <div class="widget-title-action">
            <button type="button" class="widget-action hide-if-no-js" aria-expanded="false">

            <span class="toggle-indicator" aria-hidden="true"></span>
            </button>
           



         </div>
         <div class="widget-title ">
            <h3><?php echo $field_names[$field->fieldType]; ?><span class="in-widget-title"></span></h3>
         </div>


      </div>
      <div class="widget-inside" style="display: none;">
	  <!--- Start widget inside --->
			<div class="inside">
				<div class="widget-content">
					<!--- Field --->
					<p>
						<p>
							<label for="widget-block-2-content mb-3"><strong> Label Text</strong></label>
						</p>
						<input type="text" id="input_id" style="width:100%" value="<?php echo $field->labelText ?>">
						<input type="hidden" name="field_type" value="<?php echo $field->fieldType; ?>">
					</p>
					<!--- Field End --->

					<!--- Field --->
					<p>
						<p>
							<label for="widget-block-2-content mb-3"><strong> Placeholder</strong></label>
						</p>
						<input name="input_id" type="text" id="input_id" style="width:100%"  value="<?php echo $field->placeholderText ?>">
					</p>
					<!--- Field End --->

					<!-- Fields group --->
					
						<div class="row">

							<!---- field --->
							<div class="col-4">
							<p>
								<label for="widget-block-2-content mb-3"><strong> Required</strong></label></p>
								<label class="checkbox-ios">
										<input type="checkbox" <?php if($field->isRequired){ echo 'checked="true"'; }?>>
										<span class="checkbox-ios-switch"></span>
								</label>
							</p>
							</div>
							<!---- field end--->

							<!---- field --->			
							<div class="col-4">
								<p>
									<label for="widget-block-2-content mb-3"><strong> Size</strong></label>
								</p>
								<select name="select_id" id="select_id">
								<option value="1" <?php if($field->fullSizing){ echo 'selected';} ;?>>  Half (1/2)</option>
                  <option value="0"  <?php if(!$field->fullSizing){ echo 'selected';} ;?>>Full (2/2)</option>
								</select>
							</div>
							<!---- field end --->

							<!--- field ---->
							<div class="col-4">
								<p>
									<label for="widget-block-2-content mb-3"><strong> Active</strong></label>
								</p>
								<label class="checkbox-ios">
									<input type="checkbox" <?php if($field->filedActive){ echo 'checked="true"'; }?>>
									<span class="checkbox-ios-switch"></span>
								</label>
							</div>
							<!-- field end --->
						</div>
				</div>
			</div>
			<!---- End form inside ---->
      </div>
   </div>
   <!---- end draggable widget --->
   <?php } ?>
	

   
   
</div>
										<!----- End field editor drag and drop -------->
                                        <script src="<?php echo WD_ASSETS_EASYORDER_PATH?>assets/js/html5sortable.min.js"></script>

<script>
sortable('.wd_easyorder_sortable' , {
    forcePlaceholderSize: true,
    placeholderClass: 'my-placeholder',
    itemSerializer: (serializedItem, sortableContainer) => {
    return {
		//input is 4
      position:  serializedItem.index + 1,
      labelText: serializedItem.node.children[1].children[0].children[0].children[2].value,
      fieldType: serializedItem.node.children[1].children[0].children[0].children[3].value,
      placeholderText : serializedItem.node.children[1].children[0].children[0].children[7].value,
      filedActive : serializedItem.node.children[1].children[0].children[0].children[9].children[2].children[1].children[0].checked,
      isRequired : serializedItem.node.children[1].children[0].children[0].children[9].children[0].children[1].children[0].checked,
     fullSizing : serializedItem.node.children[1].children[0].children[0].children[9].children[1].children[1].value,
    }
  }
});



let fieldsForm = document.getElementById('fields-form');
fieldsForm.addEventListener('submit', function (e) {
    // prevent the form from submitting

    e.preventDefault();
    document.getElementById('settings').value = JSON.stringify(sortable('.wd_easyorder_sortable', 'serialize')[0].items);
    console.log(sortable('.wd_easyorder_sortable', 'serialize')[0].items);
    fieldsForm.submit();

    
    

});
w(window).on("beforeunload.widgets",function(){return null;});
</script>