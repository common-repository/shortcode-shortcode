<?php
/*
Plugin Name: Shortcode Shortcode
Plugin URI: http://cubecolour.co.uk/shortcode-shortcode
Description: Provides a [shortcode] shortcode to allow you to give examples of shortcode usage without the shortcode being processed
Author: cubecolour
Version: 1.0.0
Author URI: http://cubecolour.co.uk/
License: GPLv3

  Copyright 2014-2022 Michael Atkins

  Licenced under the GNU GPL:

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**
 * Add Links in Plugins Table
 *
 */
add_filter( 'plugin_row_meta', 'ccss_meta_links', 10, 2 );
function ccss_meta_links( $links, $file ) {

	$plugin = plugin_basename(__FILE__);

	//* create the links
	if ( $file == $plugin ) {
		return array_merge( $links, array( '<a href="https://cubecolour.co.uk/wp">Donate</a>', '<a href="https://twitter.com/cubecolour">cubecolour on Twitter</a>' ) );
	}

	return $links;
}


/**
 * Shortcode shortcode for the shortcode
 *
 */
function ccss_shortcode( $atts, $content = null ) {

	return '<span class="shortcode">&#91;' . $content . '&#93;</span>';
}

add_shortcode( 'shortcode', 'ccss_shortcode' );
