<?php
/**
 * @package UIChinese
 */
/*
Plugin Name: UI Chinese
Plugin URI: https://github.com/fotock/WordPress-Chinese
Description: Optimization for Chinese / 中文显示优化.
Version: 1.0.0
Author: Fotock
Author URI: https://github.com/fotock
License: GPLv2 or later
Text Domain: uicn 
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

Copyright 2017 fotock.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'UICN_VERSION', '1.0.0' );
define('UICN_PLUGIN_DIR', plugins_url( '', __FILE__ ));

function ui_cn_admin() {
    echo '<link rel="stylesheet" href="'. UICN_PLUGIN_DIR .'/ui-cn-admin.css" type="text/css" media="screen" />
    ';
}

function ui_cn_wp() {
    echo '<link rel="stylesheet" href="'. UICN_PLUGIN_DIR .'/ui-cn-wp.css" type="text/css" media="screen" />
    ';
}

if ( is_admin() ) {
    add_action( 'admin_head', 'ui_cn_admin' );
} else {
    add_action( 'wp_head', 'ui_cn_wp' );
}
