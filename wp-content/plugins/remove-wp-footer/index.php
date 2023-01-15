<?php
/*
Plugin Name: Remove Footer Credit & Powered By
Description: In 1 click hide "Powered By" "Sponsored By" and all credit links.
Version: 1.0.1
Author: Glamdea
Author URI: http://glamdea.com/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


if (is_admin())
   {   
      function removefooter_admin_restrict_data() 
		{  
			
			add_options_page('Remove Footer', 'Remove Footer', 'manage_options', 'grf_removefooter', 'grf_removefooter');
		}   
       add_action('admin_menu','removefooter_admin_restrict_data'); 
   }
   	function grf_removefooter()
	{
		global $wpdb;

	
		?>

<div class="main-used-container">
    <div class="main-notices">
		<div class="notices">
<h1 class="main-heading">REMOVE FOOTER IS NOW ACTIVE </h1>
<p>You might need to clear your cache in order to see the results, if you don't have a cache plugin you can always download one.</p> <br>
<h1 class="main-heading">PLUGIN DEACTIVATION</h1>
<p>Our plugin is compatible with most of themes. However, in rare cases it might hide parts of your website that you wish to show, you can always deactivate the plugin to restore your footer.</p>
		</div>
    </div>
</div>
<?php
}

register_activation_hook(__FILE__, 'removefooter_my_plugin_activate');
register_deactivation_hook( __FILE__, 'removefooter_my_plugin_deactivation' );

add_action('admin_init', 'removefooter_my_plugin_redirect');

function removefooter_my_plugin_activate() {
    add_option('removefooter_my_plugin_do_activation_redirect', true);
}
function removefooter_my_plugin_deactivation() {
    
}
function removefooter_my_plugin_redirect() {
    if (get_option('removefooter_my_plugin_do_activation_redirect', false)) {
        delete_option('removefooter_my_plugin_do_activation_redirect');
        wp_redirect(get_site_url()."/wp-admin/options-general.php?page=grf_removefooter");
    }
}

function removefooter_custom_added_text() {
    ?>
	<script>
		footer = document.getElementsByTagName("footer");
		for (i = 0; i < footer.length; ++i){
		   footer[i].style.display = "none";
		}
	</script>
	
<?php } 

add_action('wp_footer', 'removefooter_custom_added_text');

function removefooter_admin_style() {
	wp_enqueue_style('admin-styles', plugin_dir_url( __FILE__ ).'/assets/css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'removefooter_admin_style');

