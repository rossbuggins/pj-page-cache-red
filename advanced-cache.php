<?php
/**
 * Redis Cache Dropin for WordPress
 *
 * Create a symbolic link to this file from your wp-content directory and
 * enable page caching in your wp-config.php.
 */

if ( ! defined( 'ABSPATH' ) )
  die();

include("plugins/pj-page-cache-red/redis-page-cache.php");

Redis_Page_Cache::cache_init();