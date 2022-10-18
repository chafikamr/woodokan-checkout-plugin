<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.css">
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
.inside{
	
}
.woodokan-nav-list {
	margin:0;

}
.woodokan-nav-list li{
	padding: 10px 10px;

}
.woodokan-nav-list li.active{
	background: #ffffff94;
    border-left: 7px solid #009688;

}
.woodokan-nav-list span{
	margin: 0 5px;}
.woodokan-nav-list a{
	text-decoration:none;
	font-size:15px;
	
	}
	.form-table{
		display:none;
	}
	.postbox {
		box-shadow: 0px 0px 6px #0000002b;
    border-radius: 10px;
    overflow: hidden;
}
</style>

<div id="wpbody" role="main" style="">

<div id="wpbody-content">

		<div class="wrap">

	<div id="icon-upload" class="icon32"></div>
	<h2>Woodokan Checkout <small class="svgs-version">Version 2.5.1</small></h2>

	<?php 

if(isset($_GET['settings-updated']) && $_GET['settings-updated'] == true){ ?>

<div>
<div class="notice notice-success notice-alt"><p>Changes saved successfully</p></div>

</div>



    <?php
}
    
    
    
    ?>
	<div id="poststuff" class="mt-5" style="margin-top:30px">
        <script src="<?php echo WD_ASSETS_EASYORDER_PATH?>assets/js/widgets.js" id="admin-widgets-js"></script>

        <div id="post-body" class="metabox-holder columns- ">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h3 style="display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #F7F7F7;
    background: #f6f7f7;"><span style="font-size:20px;display:flex;align-items:center"></span>
<form action="options.php" method="post" id="fields-form">
<?php 
settings_fields( 'general_group' );
do_settings_sections('wd_easyorder_options');
?>
<button type="submit" class="button button-primary button-hero">Save Changes</button>
</form>
	
</h3>
						
						<!-- start inside --->
						<div class="inside" style="overflow:hidden;margin-top:0;padding-bottom:0">
							<div>
								<div class="row">
									<div class="col-md-3" style="background-color:#f6f7f7;padding:0;">
										<!---- start navigation --->
										<?php  
										global $wp;
										
$page_url =  admin_url( "admin.php?page=".$_GET["page"] );
										?>
										<ul class="woodokan-nav-list">
											<li class="<?php if(!isset($_GET['page_section'])){ echo 'active';};?>" ><a href="<?php echo $page_url; ?>" > <span class="dashicons dashicons-cart"></span>Fields configuration</a></li>
											<li class="<?php if(isset($_GET['page_section']) && $_GET['page_section']=="stylings"){ echo 'active';};?>"><a href="<?php echo $page_url .'&page_section=stylings' ?>" > <span class="dashicons dashicons-admin-customizer"></span> Styles settings </a></li>
											<li class="<?php if(isset($_GET['page_section']) && $_GET['page_section']=="redirections"){ echo 'active';};?>"><a href="<?php echo $page_url .'&page_section=redirections' ?>" > <span class="dashicons dashicons-admin-generic"></span>Redirections</a></li>
										</ul>
										<!---- End navigation--->
									</div>
									<div class="col-md-9">
										<?php

				if(isset($_GET['page_section']) && $_GET['page_section']=="stylings"){

					require WD_EASYORDER_PATH.'admin/woodokan_checkout_settings/sections/stylings.php';

				}elseif(isset($_GET['page_section']) && $_GET['page_section']=="redirections"){

					require WD_EASYORDER_PATH.'admin/woodokan_checkout_settings/sections/redirect.php';
					
				}else{

					require WD_EASYORDER_PATH.'admin/woodokan_checkout_settings/sections/config.php';
				}

?>
									</div>
									
								</div>
							</div>
						</div> 
						<!-- End inside -->
						<div style="padding:30px;background-color:#f6f7f7;text-align:center">
					
					copyright 
					</div>

					</div> <!-- .postbox -->





				</div> <!-- .meta-box-sortables .ui-sortable -->
			</div> <!-- post-body-content -->

			<!-- sidebar -->
			<!--- end sidebar -->
		

		</div> <!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div> <!-- #poststuff -->

</div> <!-- .wrap -->
<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div>



