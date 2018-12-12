<?php
/**
 * @package wpkla_dashboard
 */
/*
Plugin Name: WordPress Kampala Dashbaord
Plugin URI: https://wordcampkampala.com/
Description: Clean dashboard for User
Version: 0.1.0
Author: WP Kampala
Author URI: https://wordcampkampala.com/
License: GPLv2 or later
Text Domain: wpkla_dashboard
*/

defined( 'ABSPATH' ) or die( 'Slince is golden!' );

class wpDashboardClean {
    private $metaboxIDs;
    
    function constructor($metaboxIDs = []) {
        $this->metaboxIDs = $metaboxIDs;
    }
    
    if(is_array($this->metaboxIDs)) :
        foreach($this->metaboxIDs as $metaboxID) :
            add_action('admin_init', function() {
                remove_meta_box($metaboxID,!empty($metabox['location']) ? $metaboxID['location']:null,!empty($metabox['position']) ? $metaboxID['position']:null);
            });
        endforeach;
   endif;
}
    
/*Dashboard edits
function remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'wordfence_activity_report_widget', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}

add_action( 'admin_init', 'remove_dashboard_meta' );
*/
