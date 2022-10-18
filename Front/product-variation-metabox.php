
<?php 
        
        global $post;


$dt = get_post_meta($post->ID,'variants-woodokan-data')[0];

$woodokan_saved_variations  =  json_decode($dt);


// print_r($woodokan_saved_variations);
?>


<p>
    <style>
        .woodokan-variation-note{
            width: 100%;
    height: 46px;
    background-color: #4caf50;
    color: #ffffffcf;
    display: flex;
    justify-content: center;
    font-size: 20px;
    align-items: center;
    border-radius: 5px;
    border: 3px dashed #00000017;

        }
    </style>
    <div class="woodokan-variation-note">
        <span>Woodokan Product Variation Settings</span>
    </div>
</p>
<p></p>
<input type="text"  value="" >
		<button type="button" class="button add_attribute">Add</button>
        <p></p>
        <div class="woodokan-sortable-variants">

<!------ variation box ----->

<?php  foreach($woodokan_saved_variations as $woodokan_saved_variation){?>
        <div id="metabox" class="postbox closed">
    <div class="postbox-header">
        <h2 class=""><?php echo  $woodokan_saved_variation->variantLabel;?> </h2>
        <div>
            
            <span class="woodokan-delete-variation" style="display:inline-block;height:100%;display:inline-flex;align-items:center"> 
            <span class="dashicons dashicons-trash" style="cursor:pointer"></span>
        </span>
            
            <button type="button" class="handle-order-higher" aria-disabled="false" aria-describedby="commentsdiv-handle-order-higher-description">  
                <span class="order-higher-indicator" aria-hidden="true"></span>
            </button>
            
            <button type="button" class="handle-order-lower" aria-disabled="false" aria-describedby="commentsdiv-handle-order-lower-description">
                <span class="order-lower-indicator" aria-hidden="true"></span>
            </button>
        
            <button type="button" class="handlediv" aria-expanded="true">
                <span class="toggle-indicator" aria-hidden="false"></span>
            </button>

            
            

        </div>
    </div>
				
        <div class="inside">
                <div class="main">
                                <p>Variation Title</p>
                                <p>
                                <input type="text" name="" id="" value="<?php echo $woodokan_saved_variation->variantLabel?>" class="woodokan-variant-input" style="width:100%" placeholder="Enter Variation title">
                                </p>
                                <p>Variation Elements</p>
                                <p>
                                <textarea name="" value="<?php echo $woodokan_saved_variation->variantElements;?>" class="woodokan-variant-input" id="" cols="30" rows="5"  placeholder="Examlple : red | blue | green" style="width:100%"><?php echo $woodokan_saved_variation->variantElements;?></textarea>
                                <small>use dashes | to seperate variants</small>
                            </p>
                 </div> <!--- <button  class="button button-small " style="color:#c35555;background:white;border-color:#c35555;"> <span class="dashicons dashicons-trash"></span> Delete variation</button> -->
        </div>
       
	</div>

    <?php } ?>
<!----- End variation box ---->



   
	</div>

    <p>
        <input type="hidden" name="variants-woodokan-data" id="variants-woodokan-json">
    <button type="button" class="button save_attributes button-primary" id="submit-woodokan-variants">Save attributes</button>

    </p>
</div>
        <script src="http://localhost/wordpress/wp-content/plugins/woodokan-cod-checkout/assets/js/html5sortable.min.js"></script>
        <script>
            sortable('.woodokan-sortable-variants' , {
    forcePlaceholderSize: true,
    placeholderClass: 'my-placeholder',
    itemSerializer: (serializedItem, sortableContainer) => {
    return {
      position:  serializedItem.index + 1,
      variantLabel : serializedItem.node.children[1].children[0].children[1].children[0].value,
      variantElements : serializedItem.node.children[1].children[0].children[3].children[0].value,
    }
  }
});



let fieldsForm = document.getElementById('submit-woodokan-variants');
fieldsForm.addEventListener('click', function (e) {
    // prevent the form from submitting
   
    document.getElementById('variants-woodokan-json').value = JSON.stringify(sortable('.woodokan-sortable-variants', 'serialize')[0].items);
    console.log(sortable('.woodokan-sortable-variants', 'serialize')[0].items);


    
    

});


let inputs  = document.getElementsByClassName('woodokan-variant-input');
console.log(inputs);

let woodokan_delete_var_buttons = document.querySelectorAll('.woodokan-delete-variation');
woodokan_delete_var_buttons.forEach(el=>{
    el.addEventListener('click', function(){
        // el.parentElement.parentElement.remove();
      el.parentElement.parentElement.parentElement.remove();

    })
})
// console.log(woodokan_delete_var_buttons)
        </script>