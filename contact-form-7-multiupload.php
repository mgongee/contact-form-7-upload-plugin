<?php
/*
Plugin Name: Contact Form 7 Multiupload field
Description: Adds to Contact Form 7 plugin extra field-type for uploading multiple files at once.
Author: mgongee 
Author URI: https://profiles.wordpress.org/mgongee
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Version: 0.6
*/

/*
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

require_once 'includes.php';

define( 'CFMU_VERSION', '0.6' );
define( 'CFMU_TEXT_DOMAIN', 'cf7-multiupload-field' );
define( 'CFMU_FIELD_NAME', 'multiupload' );

$plugin_root = __FILE__;
	
$cf7_multiupload = new Cf7_Multiupload( $plugin_root );
