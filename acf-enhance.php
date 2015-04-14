<?php
/*
Plugin Name: VCUarts ACF Enhance
Plugin URI: https://github.com/VCUarts/ACF-Enhance.git
Description: A small plugin to help cleanup ACF
Version: 0.0.1
Author: Cody Whitby
Author URI: https://github.com/VCUarts
Author Email: whitbycw@vcu.edu
License: GPL2
*/

/*  Copyright 2015 Cody Whitby (email: whitbycw@vcu.edu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class ACFEnhance {

    function __construct() {

        # Register admin styles and scripts
        add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );

    }

    public function register_admin_styles() {
        if (is_admin()) {
            wp_enqueue_style( 'acfenhance-plugin-styles', plugins_url( 'acf-enhance/css/acf-enhance.admin.css' ) );
        }
    }

    public function register_admin_scripts() {

        wp_enqueue_script( 'acfenhance-admin-script', plugins_url( 'acf-enhance/js/acf-enhance.admin.js' ), array('jquery') );

    }

}

$afc = new ACFEnhance();
