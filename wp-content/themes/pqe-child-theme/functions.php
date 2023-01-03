<?php
if (!defined('ABSPATH')) exit;

/**
 * Enqueue styles
 */
add_action('wp_enqueue_scripts', 'pqe_enqueue_styles', 10);

function pqe_enqueue_styles() {
  wp_enqueue_style('pqe-theme-css', get_stylesheet_directory_uri() . '/style.css', array('generate-style'), rand(111, 9999));
  wp_enqueue_style('pqe-general-css', get_stylesheet_directory_uri() . '/assets/css/pqe-general.css', array('pqe-theme-css'), rand(111, 9999));
}

/**
 * Enqueue JS
 */
add_action('wp_enqueue_scripts', 'pqe_enqueue_scripts', 10);

function pqe_enqueue_scripts() {
  wp_enqueue_script( 'pqe-general', get_stylesheet_directory_uri() . '/assets/js/pqe-general.js', array( 'jquery' ), rand( 111, 9999 ), true );
}