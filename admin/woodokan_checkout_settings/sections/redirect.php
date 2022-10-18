<?php $fields_redirections = json_decode(get_option( 'woodokan_checkout_redirections' ));?>
<p><strong>Thank you page url</strong></p>
<input name="input_id" type="text" id="thank_you_page_url" value="<?php echo $fields_redirections->redirect_page;?>" class="regular-text">
<p><strong>Order details after submission</strong></p>
<hr>

<p>
<label for="checkbox_id1">
						<input name="woodokan_checkout_billing_details" type="checkbox" id="checkbox_id1" value="1" <?php if(in_array('1',$fields_redirections->woodokan_bill)){ echo 'checked="true"';} ?>>
						Customer name
					</label>
</p>
<p>
<label for="checkbox_id2">
						<input name="woodokan_checkout_billing_details" type="checkbox" id="checkbox_id2" value="2" <?php if(in_array('2',$fields_redirections->woodokan_bill)){ echo 'checked="true"';} ?>>
						Customer adress
					</label>
</p>
<p>
<label for="checkbox_id3">
						<input name="woodokan_checkout_billing_details" type="checkbox" id="checkbox_id3" value="3" <?php if(in_array('3',$fields_redirections->woodokan_bill)){ echo 'checked="true"';} ?>>
						Customer pHone
					</label>
</p>
<p>
<label for="checkbox_id4">
						<input name="woodokan_checkout_billing_details" type="checkbox" id="checkbox_id4" value="4" <?php if(in_array('4',$fields_redirections->woodokan_bill)){ echo 'checked="true"';} ?>>
						Order total
					</label>
</p>
<p>
<label for="checkbox_id5">
						<input name="woodokan_checkout_billing_details" type="checkbox" id="checkbox_id5" value="5" <?php if(in_array('5',$fields_redirections->woodokan_bill)){ echo 'checked="true"';} ?>>
						Order Date
					</label>
</p>

<p>
		Use the sirtcode <span style="background:#dcdcdc;padding:5px; display:inline-block;border-radius:3px">['woodokan_order_details']</span> to display order detaills in Thayou page 
	</p>
<script>
let fieldsForm = document.getElementById('fields-form');
fieldsForm.addEventListener('submit', function (e) {
    // prevent the form from submitting

    e.preventDefault();

	
	let woodokan_billing_checkboxes = document.getElementsByName('woodokan_checkout_billing_details');
	let bill_details_arr =[];
	woodokan_billing_checkboxes.forEach(el=>{
		if(el.checked == true ){
			bill_details_arr.push(el.value);

		}
	})

	let billing_obj = {
		"redirect_page" : document.getElementById('thank_you_page_url').value,
		"woodokan_bill" : bill_details_arr
	}
	document.getElementById('settings').value = JSON.stringify(billing_obj);
	
    fieldsForm.submit();

    
    

});
</script>