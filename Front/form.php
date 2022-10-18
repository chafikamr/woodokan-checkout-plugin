
<?php 

$fields = json_decode(get_option( 'checkout_fields' ));





?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&family=Noto+Kufi+Arabic:wght@100;200;300;400&display=swap" rel="stylesheet">
<style>
  .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 30px;
  height: 30px;
  transform : scale(.3);
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

  .quantity_increamenter{
    display:flex
  }
  .quantity_increamenter > div{
   background-color:#F7F7F7;
   width:30%;
   display:flex;
   justify-content : center;
   align-items: center;
   border-radius:7px;
   cursor:pointer
  }
  .quantity_increamenter > input{
  
   width:40%;
   text-align : center;
   border : none;
   outline:none;

  }
  .wd_label{
    opacity: .65;
  }
  .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: none;
}
.btn-check:focus+.btn-primary, .btn-primary:focus {
    color: #fff;
    /* background-color: #0b5ed7;
    border-color: #0a58ca; */
    box-shadow: none;
}
.buy_now_btn{
  position:relative;
}
.button-loading{
position:absolute;
width:100%;
height :100%;
    /* background: #ffffff87; */
right :0;
top:0;
justify-content : center;
display:flex;

}
.form-select:focus {
    border-color: #009688;
    outline: 0;
    box-shadow: none;
}

.buy_now_btn_loader{
  display:none
}
.woodokan_checkout_form{
  font-family: 'cairo';
  text-align : right;
}
.form-floating>label {
   
    right: 0;
   
}
.wd_label{
  display:block
}
/*initialize **/

 
      input[type=text].woodokan-quantity-input{
  display:block;
 
  border:none;
  outline:none;
  padding:0;

 
  
  background-color:initial;
  box-shadow:unset;
}
.woodokan_buy_now_button{
  display:block;
  width:100%;
  background : black;
  color : white;
  border:unset;
  outline : unset;
  border-radius:5px;
  display: block;
    width: 100%;
    background: #3f51b5;
    color: white;
    border: unset;
    outline: unset;
    border-radius: 5px;
    height: 47px;
padding :0;
font-family:'cairo';
}
.woodokan_buy_now_button:hover{
  text-decoration: unset;
}
.woodokan_buy_now_button:focus{
  display:block;
  width:100%;
  background : black;
  color : white;
  border:unset;
  outline : unset;
}
.woodokan-variantion-input{
  padding:10px;
  line-height:2;
  font-size:20px;
  /* font-family:'cairo'; */
  text-align:right;
}
input[type="text"].woodokan-checkout-input-field,
input[type="phone"].woodokan-checkout-input-field,
input[type="email"].woodokan-checkout-input-field,
.woodokan-variantion-input
{
  display:block;
  width:100%;
  border : 1px solid black;
  
  background-color:initial;
  padding: 10px 15px;
  box-shadow:unset;
  height: 50px;
    width: 100%;
    transition: all .25s;
    caret-color: gray;
    border-radius: 5px;
    border: 1px solid #e5e5e5;
    text-align:right;
}
.woodokan-variantion-input{
  color:gray;
  font-size:15px;
  padding:10px;
}
.woodokan-variantion-input:focus
{
  border: 2px solid #3f51b5;
    box-shadow: 0 5px 20px 0 #0000000d;
    /* font-size:20px; */
}
input[type="text"].woodokan-checkout-input-field::placeholder{
  font-family:'cairo';
  text-align:right;
  font-size:13px;
  color:#adadad;
  display:none;
  /* opacity: 1; */
  transition:  .2s ease-in-out
}
input[type="text"].woodokan-checkout-input-field{
  font-family:'cairo';
}
.woodokan-checkout-input-field:focus::placeholder{
  opacity:0
}
input[type="text"].woodokan-checkout-input-field:focus,
input[type="phone"].woodokan-checkout-input-field:focus,
input[type="email"].woodokan-checkout-input-field:focus{
  border: 2px solid #3f51b5;
    box-shadow: 0 5px 20px 0 #0000000d;
}
.woodokan_form_wrapper{
  border: 1px solid #e9e9e9;
  
    box-shadow: 0px 0px 12px 3px #6e6e6e1c;
    box-shadow: 0 0px 20px -10px #0000001a;
    /* border-radius: 10px; */
}
.woodokan_checkout_form{
  padding: 20px;

}
.woodokan_for_header{
  padding: 20px;
  border-bottom: 1px solid #0000003b;
    background: #00000003;
    border-top: 4px solid #3f51b5;
    font-family:'cairo';
    font-size:15px;
}
</style>
<?php

$woodokan_product_variants = get_post_meta( get_the_ID(),'variants-woodokan-data')[0];
$woodokan_product_variants =  json_decode($woodokan_product_variants);

// print_r($woodokan_product_variants);
?>
<div class="woodokan_form_wrapper">

<div class="woodokan_for_header">
   <span style="display:inline-block"></span> معلومات الزبون والتوصيل 
  </div>
<form action="" class="woodokan_checkout_form">
 
<div class="row">

<!----- variant--------->
<?php foreach($woodokan_product_variants as $woodokan_var){?>
<div class="col-md-12" style="margin-bottom:30px">
  <label class="form-label"><?php echo $woodokan_var->variantLabel; ?></label>

<select class=" form-select form-select-lg mb-3 woodokan-variantion-input" name="woodokan_variant_<?php echo $woodokan_var->variantLabel; ?>" aria-label=".form-select-lg example">


<?php 
$arr_var_items = explode('|',$woodokan_var->variantElements);
foreach($arr_var_items as $arr_var_item){?>
  <option value="<?php echo  $arr_var_item;?>"><?php echo  $arr_var_item;?></option>
  <?php }?>

</select>
</div>
<?php } ?>
<!----- Endvariant--------->
<!----- field col ------>
<div class="col-md-12">
  <label class="form-label">معلومات العميل</label>

</div>

<?php foreach($fields as $field){ if($field->filedActive == true){?>


<div class="col-md-<?php if($field->fullSizing){ echo '6';}else{ echo '12';} ?>">
<div class="" style="margin-bottom:20px">
<label for="floatingInput" class="wd_label"><?php echo $field->labelText  ?></label>

  <input type="text" class="form-control woodokan-checkout-input-field" id="floatingInput" name="field_type_<?php echo $field->fieldType; ?>" placeholder="<?php echo $field->placeholderText; ?>">

</div>

</div>
<?php }} ?>
<!---- end field col ------>

</div>
<div class="row">
<div class="col-5 col-md-4">
    <div class="quantity_increamenter" style="width:100%;height:100%">
      <div id="plus_quantity">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg>
      </div>
      <input type="text" name="" readonly class="woodokan-quantity-input" id="quantitiy_input" style="height:100%;max-width:100%" value="1">
      <div id="minus_quantity"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
</svg></div>
    </div>
  </div>
  <div class="col-7 col-md-8">

    <button class="btn btn-success btn-lg w-100 d-block buy_now_btn woodokan_buy_now_button" id="buy_now_btn" type="button">
      <span id="woodokan_buy_now_button">  إشتري الآن</span>
      <div class="button-loading">
      <div class="lds-spinner buy_now_btn_loader" id="buy_now_btn_loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

      </div>
    </button>

  </div>

</div>
</form></div>
<style> form.cart{display:none}</style>
<script>


// Quantity input controllers 
document.getElementById('plus_quantity').addEventListener('click' , function(){
  let q_input_field =   document.getElementById('quantitiy_input');
  q_input_field.value  = +q_input_field.value +  1;

  
})
document.getElementById('minus_quantity').addEventListener('click' , function(){
  let q_input_field =   document.getElementById('quantitiy_input');
  if(q_input_field.value == 1){
    return
  }
  q_input_field.value  = +q_input_field.value -  1;

  
})


//[ 0 ] buy now button trigger 
document.getElementById('buy_now_btn').addEventListener('click' , function(){
  console.log('Helllo');
  document.getElementById('buy_now_btn_loader').style.display = 'flex';
  document.getElementById('woodokan_buy_now_button').style.opacity = '.3';
  let woodokan_var_selects = document.getElementsByClassName('woodokan_select_variant');
  console.log(woodokan_var_selects);
  
});


// [ 1 ] Retreive all variation inputs As object if any 
let  woodokan_variants = document.querySelectorAll('.woodokan-variantion-input');
let variations_array = [];
if(woodokan_variants.length >0){
  woodokan_variants.forEach(el=>{
    variations_array.push(
      {
        "variation" : el.name,
        "selected" : el.value
      }
    ) 
  })
}


// [ 2 retreive all checkout fields inputs as object af any]
let woodokan_field_array = [];
let  woodokan_checkout_input_fields = document.querySelectorAll(".woodokan-checkout-input-field");
woodokan_checkout_input_fields.forEach(el=>{
  woodokan_field_array.push(
      {
        "field_type" : el.name,
        "value" : el.value
      }
    )
  })




  // prepare data to submission 
let woodokan_checkout_data = {
  "variationData" : variations_array,
  "OrderDetails" : woodokan_field_array,
  "action" : "submitnew"
}


   


// send HTTP REQUEST VIA AJAX 
jQuery.post('<?php echo esc_url(admin_url('admin-ajax.php')); ?>'
, woodokan_checkout_data, function(response) {
			console.log(response);
	});
</script>