<?php
/*
Plugin Name: Paged Offset fix for query_posts
Plugin URI: 
Description: This plugin removes the offset parameter from post queries with page parameter which stops pagination from working.
Author: Samuel Diethelm
Version: 1.0
Author URI: 
*/

add_action('parse_query','paged_and_offset_collision');
function paged_and_offset_collision(&$args){
	if( isset($args->query_vars['offset']) && isset($args->query_vars['paged']) )
		unset($args->query_vars['offset']);
}
