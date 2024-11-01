<?php
/*
Plugin Name: WP Disable Lazy Load
description: WP Disable Lazy Load is the best plugin to disable the lazy Loading feature that was added in WP v5.5.
Version: 1.1
Author: Boopathi Rajan
Author URI: http://www.boopathirajan.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
if (!defined('ABSPATH')) die();

add_filter('wp_lazy_loading_enabled', '__return_false');