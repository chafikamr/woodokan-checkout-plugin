<?php
/*
Plugin Name: 	Woodokan EasyOrder 
Plugin URI:		http://wordpress.org/plugins/svg-support/
Description: 	Upload SVG files to the Media Library and render SVG files inline for direct styling/animation of an SVG's internal elements using CSS/JS.
Version: 		2.5.1
Author: 		Chafik Amraoui
Author URI: 	https://chafik.info
Text Domain: 	woodokan-cod-checkout
Domain Path:	/languages
License: 		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html

	Copyright 2022 and beyond | Chafik (email : chafikamraoui0@gmail.com)

Woodokan EasyOrder is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Woodokan EasyOrder is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Woodokan EasyOrder. If not, see http://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


if(!class_exists('wd_easyorder')){
    Class wd_easyorder{

        public function __construct()
        {
            $this->define_constants();
            include WD_EASYORDER_PATH . 'menus/admin-menu.php';
        }

        public function define_constants()
        {
            define('WD_EASYORDER_PATH' , plugin_dir_path( __FILE__ ));
            define('WD_ASSETS_EASYORDER_PATH' , plugin_dir_url(__FILE__));
        }

    }
}

if(class_exists('wd_easyorder')){
    $wd_easyorder = new wd_easyorder();
}

add_action( 'wp_ajax_submitnew', 'submitnew' );

function submitnew() {
	echo 'hjkhjhjhjk';

	
}


// add_filter( 'template_include', 'wpa3396_page_template' );
// function wpa3396_page_template( $page_template )
// {
//     if (is_page('checkout')) {
//         // exit;
//         return WD_EASYORDER_PATH. 'custom-page-template.php';
//     }else{
//         return  $page_template;
//     }
 
// }
