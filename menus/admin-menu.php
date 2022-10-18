<?php




register_setting(
    'general_group',
    'wd_settings'
);
 


add_action('admin_menu', 'wd_easyorder_menu');
add_action('admin_init', 'wd_add_settings_field');
function wd_easyorder_menu() { 

    add_menu_page( 
        'WD COD checkout', // First parameter is page title. the title tag of the page when the menu is selected..
        'WD EasyOrder', // Second parameter is menu title. The text to be used for menu title.
        'edit_posts',  // Third one is capability, The capability required for this menu to be displayed to the user
        'wd_easyorder_options',  // Fourth parameter is menu slug, which is used for creating page URL. Keep this unique.
        'wd_easyorder_page_one', // Fifth parameter is page callback function. The function to be called to output the content for this page.
        'dashicons-screenoptions' //Sixth parameter is for icon, either you can provide a URL of image or you can choose predefined WordPress icons. https://developer.wordpress.org/resource/dashicons/
  
       );
  }
  

/**
* Disply callback for the Unsub page.
*/
function wd_easyorder_page_one() {
   
    require WD_EASYORDER_PATH.'admin/woodokan_checkout_settings/N.php';
}


// settings page 

add_action('admin_init', 'wd_easyorder_settings_sectiion');
function wd_easyorder_settings_sectiion() {
 
    // First, we register a section. This is necessary since all future options must belong to one.
    add_settings_section(
        'wd_product_checkout_settings',         // ID used to identify this section and with which to register options
        '',                  // Title to be displayed on the administration page
       null, // Callback used to render the description of the section
        'wd_easyorder_options'                           // Page on which to add this section of options
    );
} 


// Next, we will introduce the fields for toggling the visibility of content elements.

function wd_add_settings_field(){
    add_settings_field( 
        'wd_checkouts_json_field',                      // ID used to identify the field throughout the theme
        '',                           // The label to the left of the option interface element
        'wd_easyorder_field_render',   // The name of the function responsible for rendering the option interface
        'wd_easyorder_options',                          // The page on which this option will be displayed
        'wd_product_checkout_settings',         // The name of the section to which this field belongs
      
    );
    
}





function wd_easyorder_field_render(){


    if(isset($_GET['page_section']) && $_GET['page_section']=="stylings"){

echo '<input type="hidden" name="wd_settings[woodokan_checkout_stylings]" id="settings">';
    }elseif(isset($_GET['page_section']) && $_GET['page_section']=="redirections"){
echo '<input type="hidden" name="wd_settings[woodokan_checkout_redirections]" id="settings">';
    }else{
echo '<input type="hidden" name="wd_settings[checkout_fields]" id="settings">';
    }
    
}


if(isset($_POST['wd_settings']['checkout_fields']) && $_SERVER['REQUEST_METHOD'] === 'POST' ){
   
   
    update_option('checkout_fields', $_POST['wd_settings']['checkout_fields']);
   
    
}elseif(isset($_POST['wd_settings']['woodokan_checkout_stylings']) && $_SERVER['REQUEST_METHOD'] === 'POST' ){
    update_option('woodokan_checkout_stylings', $_POST['wd_settings']['woodokan_checkout_stylings']);
}elseif(isset($_POST['wd_settings']['woodokan_checkout_redirections']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
    update_option('woodokan_checkout_redirections', $_POST['wd_settings']['woodokan_checkout_redirections']);
}


add_action( 'wp_enqueue_scripts', 'wd_form_scripts' );



function wd_form_scripts(){
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.css');

}

add_action('woocommerce_after_add_to_cart_form' , 'wd_front_form');

function wd_front_form(){

    include WD_EASYORDER_PATH .'Front/form.php';
  
}


function wd_adding_custom_meta_boxes() {
    add_meta_box( 
        'my-meta-box',
        __( 'Woodokan Variations' ),
        'render_my_meta_box',
        'product',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'wd_adding_custom_meta_boxes', 10, 2 );

function render_my_meta_box(){

    require WD_EASYORDER_PATH .'Front/product-variation-metabox.php';
}



add_action('save_post' , 'woodokan_save_meta_box');


function woodokan_save_meta_box($post_id){


// doing the check 
if( isset($_POST['action'])  && $_POST['action'] == 'editpost'){

    $old_vl = get_post_meta($post_id,'variants-woodokan-data')[0];
  

    update_post_meta($post_id,'variants-woodokan-data', $_POST['variants-woodokan-data'], $old_vl);





}




}

function lh_add_livechat_js_code() {
    ?>
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
        window.onbeforeunload = function () {
     // Your Code here 
      return null;  // return null to avoid pop up
    }
        </script>
      
    
        <!-- End of LiveChat code -->
    <?php
    }
    add_action( 'admin_footer', 'lh_add_livechat_js_code' , 10000); // For back-end




    add_action( 'admin_enqueue_scripts', 'wptuts_add_color_picker' );
    function wptuts_add_color_picker( $hook ) {
     
        if( is_admin() ) { 
         
            // Add the color picker css file       
            wp_enqueue_style( 'wp-color-picker' ); 
             
            // Include our custom jQuery file with WordPress Color Picker dependency
            wp_enqueue_script( 'custom-script-handle', plugins_url( 'custom-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true ); 
        }
    }