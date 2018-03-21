<?php
/**
 * @package Add OG image default for site with no default at all
 * @version 1.0
 */
/*
Plugin Name: Modify OG Image Site Default for Sites with no Default
Description: A plugin to modify the default og:image image for sites with no default
Author: Transparent Solutions
Version: 1.0
Author URI: http://transparentsolutions.com
*/

function mjs_add_og_image() {
    echo  '<meta property="og:image" content="https://battle4kc.com/wp-content/uploads/2017/08/Battle4kc.jpg" />'."\n";
}
add_action( 'wp_head', 'mjs_add_og_image' );
