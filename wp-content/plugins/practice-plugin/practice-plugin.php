<?php 
/*
* @package PracticePlugin
*/
/*
Plugin Name: Practice Plugin
Plugin URI: http://example.com/plugin
Description: Practice plugin.
Version: 1.0.0
Author: jctiru
Author URI: http://example.com/jctiru
License: GPLv2
Text Domain: practice-plugin
*/

if(!defined('ABSPATH')){
	die();
}

class PracticePlugin {
	function __construct(){
		add_action('init', [$this, 'custom_post_type']);
	}

	function register_scripts(){
		add_action('admin_enqueue_scripts', [$this, 'enqueue']);
	}

	function activate(){
		// Generate CPT
		//$this->custom_post_type();
		// Flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate(){
		// Flush rewrite rules
		flush_rewrite_rules();
	}

	function uninstall(){
		// Delete CPT
		// Delete all the plugin data from the DB
	}

	function custom_post_type(){
		register_post_type('book', ['public' => true, 'label' => 'Books']);
	}

	function enqueue(){
		// Enqueue all scripts
		wp_enqueue_style( 'practicepluginstyle', plugins_url('/assets/style.css',  __FILE__), [], null, 'all');
		wp_enqueue_script( 'practicepluginscript', plugins_url('/assets/script.js',  __FILE__), [], null, true);
	}
}

if(class_exists('PracticePlugin')){
	$practicePlugin = new PracticePlugin();
	$practicePlugin->register_scripts();
}

// activation
register_activation_hook( __FILE__, [$practicePlugin, 'activate'] );
// deactivation
register_deactivation_hook( __FILE__, [$practicePlugin, 'deactivate']);
// uninstall
register_uninstall_hook( __FILE__, [$practicePlugin]);