<?php 
/**
* Trigger this file on Plugin uninstall
*
* @package PracticePlugin
*/

if(!defined('WP_UNINSTALL_PLUGIN')){
	die();
}

// CLear database stored data
// $books = get_posts(['post_type' => 'book', 'numberposts' => -1]);
// foreach($books as $book){
// 	wp_delete_post($book->ID, true);
// }

// Access the database via SQL
global $wpdb;
$table_posts = $wpdb->prefix . "posts";
$table_postmeta = $wpdb->prefix . "postmeta";
$table_term_relationships = $wpdb->prefix . "term_relationships";
$wpdb->query("DELETE FROM $table_posts WHERE post_type = 'book'");
$wpdb->query("DELETE FROM $table_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM $table_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");