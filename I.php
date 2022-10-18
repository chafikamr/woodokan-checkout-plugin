<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<?php 

$field_names = array(
    '1' => 'Phone Number',
    '2' => 'Customer First Name',
    '3' => 'Customer Last Name',
    '4' => 'Adress',
    '5' => 'City',
    '6' => 'Email',
    '7' => 'Country'

)


?>
<style>
.card{
    max-width : 100%;
    padding:0;
    box-shadow: 0px 0px 20px #00000021;
}.container {
    max-width: 900px;
    margin: auto
}

.title {
    text-align: center;
    font-family: Arial;
    margin-top: 50px;
    margin-bottom: 50px
}

.accordion__item {
    margin-bottom: 10px;
    background-color:white;
}

.accordion__item__header {
        /* background-color: #003349; */
        padding: 15px;
    cursor: pointer;
    position: relative;
    /* color: #fff; */
    border: 1px solid #c5c5c5;
    font-family: Arial;
    font-weight: 400;
    font-size: 14px;
    cursor:move;
}


.accordion__item__header .arrow-button {
    /* height: 15px;
    width: 15px; */
    /* content: ""; */
    /* position: absolute;
    right: 15px;
    top: 15px; */
    transition: .5s all;
   
   
}

.accordion__item__header.active  {
   
    transition: .4s
}

.accordion__item__header.active .arrow-button {
    transform: rotate(-180deg);
    transform-origin : 50% 50% ;
    
    /* top:  */
}

.accordion__item__content {
    overflow-y: hidden;
    padding: 0;
    display: none;
    border: 1px solid #c5c5c5;
    border-top-color: transparent;
}


/**** checkbox */
.checkbox-ios {
	display: inline-block;    
	height: 28px;    
	line-height: 28px;  
	margin-right: 10px;      
	position: relative;
	vertical-align: middle;
	font-size: 14px;
	user-select: none;	
}
.checkbox-ios .checkbox-ios-switch {
	position: relative;	
	display: inline-block;
	box-sizing: border-box;			
	width: 56px;	
	height: 28px;
	border: 1px solid rgba(0, 0, 0, .1);
	border-radius: 25%/50%;	
	vertical-align: top;
	background: #eee;
	transition: .2s;
}
.checkbox-ios .checkbox-ios-switch:before {
	content: '';
	position: absolute;
	top: 1px;
	left: 1px;	
	display: inline-block;
	width: 24px;	
	height: 24px;
	border-radius: 50%;
	background: white;
	box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
	transition: .15s;
}
.checkbox-ios input[type=checkbox] {
	display: block;	
	width: 0;
	height: 0;	
	position: absolute;
	z-index: -1;
	opacity: 0;
}
.checkbox-ios input[type=checkbox]:not(:disabled):active + .checkbox-ios-switch:before {
	box-shadow: inset 0 0 2px rgba(0, 0, 0, .3);
}
.checkbox-ios input[type=checkbox]:checked + .checkbox-ios-switch {
	background: #2196F3;
}
.checkbox-ios input[type=checkbox]:checked + .checkbox-ios-switch:before {
	transform:translateX(28px);
}
 
/* Hover */
.checkbox-ios input[type="checkbox"]:not(:disabled) + .checkbox-ios-switch {
	cursor: pointer;
	border-color: rgba(0, 0, 0, .3);
}
 
/* Disabled */
.checkbox-ios input[type=checkbox]:disabled + .checkbox-ios-switch {
	filter: grayscale(70%);
	border-color: rgba(0, 0, 0, .1);
}
.checkbox-ios input[type=checkbox]:disabled + .checkbox-ios-switch:before {
	background: #eee;
}
 
/* Focus */
.checkbox-ios.focused .checkbox-ios-switch:before {
	box-shadow: inset 0px 0px 4px #ff5623;
}

.arrow-button{
    font-size:20px;
    cursor:pointer
}
.my-placeholder{
    background-color:#F7F7F7;
      margin-bottom: 10px;
      border: 2px dashed gray;
}
.wd-easyorder-save-button{
    border: none;
    outline: none;
    padding: 10px;
    /* border: 5px; */
    border-radius: 7px;
}
.fields-bg{
    background-color:#00000005
}
.field_size label{
  display: block;
  text-align:center;
    padding: 10px;
    border: 1px solid #00000040;
    border-radius: 5px;
}
input[name="field_size"]{
  display:none
}
input[name="field_size"]:checked+label{
  border: 2px solid #009688;
    color: white;
    background: #009688;
}
</style>


<?php
$fields = json_decode(get_option( 'checkout_fields' ));
// echo '<pre>';
// print_r($fields);


// echo '</pre>';
?>

<!-- <h4 class="mt-3">Woodokan EasyOrder product page options</h4> -->

<div class="container mt-3">
<?php 

if(isset($_GET['settings-updated']) && $_GET['settings-updated'] == true){ ?>

<div class="alert alert-success" role="alert">
  Saved successfully
</div>



    <?php
}
    
    
    
    ?>
<div class="card " style="width:100%">
  <div class="card-header">
    Product page options
  </div>
  <div class="card-body">
  <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Fields</a>
   
  </div>
  <div class="fields-bg border w-100 p-2" id="v-pills-tabContent">

  
<?php

// print_r($fields);


?>

<div class="accordion wd_easyorder_sortable">

<?php foreach($fields as $field){ ?>
    <!--- Start accordion item -->
      <div class="accordion__item">
        <div class="accordion__item__header d-flex justify-content-between">
            <div> <?php echo $field_names[$field->fieldType]; ?></div>
            <div class="px-5 d-flex align-items-center">
                <label class="checkbox-ios">
                    <input type="checkbox" <?php if($field->filedActive){ echo 'checked="true"'; }?>>
                    <span class="checkbox-ios-switch"></span>
                </label>
                <!-- <i class="  bi bi-chevron-down "></i> -->
                <i class="bi arrow-button  bi-gear tgl_btn"></i>
            </div>
        </div>
    
        <div class="accordion__item__content p-3">
            <!-- item content start -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Label text</label>
                <input type="text" class="form-control" autocomplete="none" value="<?php echo $field->labelText ?>">
                <input type="hidden" name="field_type" value="<?php echo $field->fieldType; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Placeholder text</label>
                <input type="text" class="form-control"  autocomplete="none" value="<?php echo $field->placeholderText ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label d-block">Required</label>
                <label class="checkbox-ios">
                    <input type="checkbox" <?php if($field->isRequired){ echo 'checked="true"'; }?>>
                    <span class="checkbox-ios-switch"></span>
                </label>
               
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label d-block">Field sizing</label>
               <div class="row field_size">
               <div class="col-md-2">
               <select class="form-select" aria-label="Default select example">
               
                  <option value="1" <?php if($field->fullSizing){ echo 'selected';} ;?>>  Half (1/2)</option>
                  <option value="0"  <?php if(!$field->fullSizing){ echo 'selected';} ;?>>Full (2/2)</option>
                  
                </select>
                 
                </div>
              
                
               </div>
               
            </div>
            <!-- item content end -->
        </div>
      </div>
<?php } ?>
  <!--- End accordion item -->

    
      

</div> <!-- id accordion end -->

  
  </div>
</div>
<div class="mt-3">
<form action="options.php" method="post" id="fields-form">
    <?php 
settings_fields( 'general_group' );


do_settings_sections('wd_easyorder_options');



?>
   
<button class="btn-primary w-100 wd-easyorder-save-button" id="sort">Save changes</button>
</form>
</div>
  </div>

  <div class="card-footer text-muted text-center">
    <small>Made with <i class="bi bi-heart-fill text-danger"></i> by Chafik Amraoui</smal>
  </div>
</div>

</div>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo plugin_dir_url(__FILE__)?>assets/js/html5sortable.min.js"></script>

<script>
if ($(".accordion__item__header").length > 0) {
  var active = "active";
  $(".tgl_btn").click(function () {
    $(this.parentElement.parentElement).toggleClass(active);
    $(this.parentElement.parentElement).next("div").slideToggle(200);
  });
}


sortable('.wd_easyorder_sortable' , {
    forcePlaceholderSize: true,
    placeholderClass: 'my-placeholder',
    itemSerializer: (serializedItem, sortableContainer) => {
    return {
      position:  serializedItem.index + 1,
      labelText: serializedItem.node.children[1].children[0].children[1].value,
      fieldType: serializedItem.node.children[1].children[0].children[2].value,
      placeholderText : serializedItem.node.children[1].children[1].children[1].value,
      filedActive : serializedItem.node.children[0].children[1].children[0].children[0].checked,
      isRequired : serializedItem.node.children[1].children[2].children[1].children[0].checked,
      fullSizing : serializedItem.node.children[1].children[3].children[1].children[0].children[0].value,
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
</script>