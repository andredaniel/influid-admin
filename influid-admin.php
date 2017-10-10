<?php

/*
Plugin Name: Influid Admin
Plugin URI: http://influid.com.br/
Description: Influid Wordpress Admin
Author: André Daniel
Version: 0.2
Author URI: https://github.com/andredaniel
*/

/**
 * Influid Admin Plugin
 * Copyright (C) 2017, Influid
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'INFLUID_FILE' ) ) {
	define( 'INFLUID_FILE', __FILE__ );
}

// Load the Influid Admin plugin.
require_once( dirname( INFLUID_FILE ) . '/influid-admin-main.php' );
