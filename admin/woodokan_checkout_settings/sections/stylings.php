<?php $fields_styling = json_decode(get_option( 'woodokan_checkout_stylings' ));

 ?>
<!----------- start input styings ------------->
    <p><strong>Form inputs settings</strong></p>
<div class="row">
    <div class="col-6">

<p>Border color : </p>
<input type="text" name="" id="input_border_color" class="color-field" value="<?php echo $fields_styling->input_border_color ?>">
<p>Border on foucus color : </p>
<input type="text" name="" id="input_border_color_onfocus" class="color-field" value="<?php echo $fields_styling->input_border_color_onfocus ?>">

<p>input text color  : </p>
<input type="text" name="" id="input_text_color" class="color-field" value="<?php echo $fields_styling->input_text_color ?>">
<p>input background : </p>
<input type="text" name="" id="input_background_color" class="color-field" value="<?php echo $fields_styling->input_background_color ?>">


               <p>input laceholder color :</p>
              <input type="text" name="" id="input_placeholder_color" class="color-field" value="<?php echo $fields_styling->input_placeholder_text_color ?>"></p>
          






    </div>
    <div class="col-6">
    <table>
            <tr>
                <td> <p>input height : </p></td>
                <td> <p> <input type="number" name="input_height" id="input_height"  class="small-text"  value="<?php echo $fields_styling->input_height ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>input border width :  </p></td>
                <td> <p> <input type="number" name="input_border_width" id="input_border_width"  class="small-text"  value="<?php echo $fields_styling->input_border_width ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>input border radius  : </p></td>
                <td> <p>  <input type="number" name="input_border_radius" id="input_border_radius"  class="small-text" value="<?php echo $fields_styling->input_border_radius ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>input laceholder size  : </p></td>
                <td> <p>  <input type="number" name="" id="input_placeholder_size"  class="small-text"  value="<?php echo $fields_styling->input_placeholder_text_size ?>">px</p></td>
            </tr>

        </table>
   








    </div>
</div>


<!----- start button ---------->
<p><strong>Form Button</strong></p><hr>
<div class="row">
<div class="col-6">
<p>button text color : </p>
<input type="text" name="" id="button_text_color" class="color-field" value="<?php echo $fields_styling->button_text_color ?>">
<p>button text color (hover) : </p>
<input type="text" name="" id="button_text_color_onhover" class="color-field" value="<?php echo $fields_styling->button_text_color_onhover ?>">
<p>Button background color : </p>
<input type="text" name="" id="button_background_color" class="color-field" value="<?php echo $fields_styling->button_background_color ?>">

<p>Button Hover background  color  : </p>
<input type="text" name="" id="button_background_color_onhover" class="color-field" value="<?php echo $fields_styling->button_background_color_onhover ?>">
<p>Border color : </p>
<input type="text" name="" id="button_border_color" class="color-field" value="<?php echo $fields_styling->button_border_color ?>">
</div>
<div class="col-6">
<table>
            <tr>
                <td> <p>Button height : </p></td>
                <td> <p> <input type="number" name="" id="button_height"  class="small-text" value="<?php echo $fields_styling->button_height ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>Button text-size:  </p></td>
                <td> <p> <input type="number" name="" id="button_text_size"  class="small-text" value="<?php echo $fields_styling->button_text_size ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>botton border width  : </p></td>
                <td> <p>  <input type="number" name="" id="button_border_width"  class="small-text" value="<?php echo $fields_styling->button_border_width ?>">px</p></td>
            </tr>

        </table>
</div>
</div>


<!-- label ------>
<p><strong>Label</strong></p><hr>
<div class="row">
<div class="col-6">
<p>label text color : </p>
<input type="text" name="" id="label_text_color" class="color-field" value="<?php echo $fields_styling->label_text_color ?>">

</div>
<div class="col-6">
<table>
            <tr>
                <td> <p>Label text size : </p></td>
                <td> <p> <input type="number" name="" id="label_text_size"  class="small-text" value="<?php echo $fields_styling->label_text_size ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>label weight:  </p></td>
                <td> <p> <input type="number" name="" id="label_text_weight"  class="small-text" value="<?php echo $fields_styling->label_text_weight ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>margin-bottom  : </p></td>
                <td> <p>  <input type="number" name="" id="label_margin_bottom"  class="small-text" value="<?php echo $fields_styling->label_margin_bottom ?>">px</p></td>
            </tr>
            <tr>
                <td> <p>margin-top  : </p></td>
                <td> <p>  <input type="number" name="" id="label_margin_top"  class="small-text" value="<?php echo $fields_styling->label_margin_top ?>">px</p></td>
            </tr>

        </table>
</div>
</div>
<script>

let fieldsForm = document.getElementById('fields-form');
fieldsForm.addEventListener('submit', function (e) {
    // prevent the form from submitting

    e.preventDefault();
    let wooodokan_stylings_object = {
    input_border_color : document.getElementById('input_border_color').value ,
    input_border_color_onfocus : document.getElementById('input_border_color_onfocus').value ,
    input_text_color : document.getElementById('input_text_color').value ,
    input_background_color : document.getElementById('input_background_color').value ,
    input_height : document.getElementById('input_height').value ,
    input_border_width : document.getElementById('input_border_width').value ,
    input_border_radius : document.getElementById('input_border_radius').value ,
    input_placeholder_text_color : document.getElementById('input_placeholder_color').value ,
    input_placeholder_text_size : document.getElementById('input_placeholder_size').value ,
    /// start Button
    button_text_color : document.getElementById('button_text_color').value ,
    button_text_color_onhover : document.getElementById('button_text_color_onhover').value ,
    button_background_color : document.getElementById('button_background_color').value ,
    button_background_color_onhover : document.getElementById('button_background_color_onhover').value ,
    button_border_color : document.getElementById('button_border_color').value ,
    button_height : document.getElementById('button_height').value ,
    button_text_size : document.getElementById('button_text_size').value ,
    button_border_width : document.getElementById('button_border_width').value ,
    //label
    label_text_color : document.getElementById('label_text_color').value ,
    label_text_size : document.getElementById('label_text_size').value ,
    label_text_weight : document.getElementById('label_text_weight').value ,
    label_margin_bottom : document.getElementById('label_margin_bottom').value ,
    label_margin_top : document.getElementById('label_margin_top').value ,

}
document.getElementById('settings').value = JSON.stringify(wooodokan_stylings_object);

console.log(wooodokan_stylings_object);
    fieldsForm.submit();

    
    

});

(function( $ ) {
 
 // Add Color Picker to all inputs that have 'color-field' class
 $(function() {
     $('.color-field').wpColorPicker();
 });
  
})( jQuery );
    </script>