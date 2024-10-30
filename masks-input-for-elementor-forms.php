<?php
/**
* Plugin Name: Input Masks for Elementor Forms
* Description: Input Masks allows you to create input fields with predefined formats in your Elementor Forms
* Author: add-ons.org
* Requires Plugins: elementor
* Version: 1.0.1
* Elementor tested up to: 3.24
* Elementor pro tested up to: 3.24
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
define( 'YEEADDONS_IP_MASKS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'YEEADDONS_IP_MASKS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
class Yeeaddons_IP_Masks_Elementor_Init {
    function __construct(){
        add_action( 'elementor_pro/forms/fields/register', array($this,"load") );
    }
    function load($form_fields_registrar){
        include YEEADDONS_IP_MASKS_PLUGIN_PATH . "backend/field.php";
        $form_fields_registrar->register(new \Yeeaddons_IP_Masks_Elementor_Field_Masks());
    }
}
new Yeeaddons_IP_Masks_Elementor_Init;