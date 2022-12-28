<?php
if ( !defined( 'ABSPATH' ) ) exit;

/*
Plugin Name: Panier Québécois entreprise
Description: All custom features for the website
Version: 1.0
Author: Christophe Paganon
Author URI: https://chrispaganon.com/
*/

add_action( 'plugins_loaded', 'pqe_initialize' );

function pqe_initialize() {
  define( 'PQ_INCLUDE_DIR', plugin_dir_path( __FILE__ ) . 'includes/' );

  include_once( PQ_INCLUDE_DIR . 'pqe_head.php' );
}