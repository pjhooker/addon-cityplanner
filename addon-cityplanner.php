<?php
/*
Plugin Name: addon-cityplanner
Plugin URI: https://www.cityplanner.biz/
Description: A simple hello world wordpress plugin
Version: 1.0
Author: Balakrishnan
Author URI: http://yourdomain.com
License: GPL
*/

// This calls hello_world() function when wordpress initializes.
// Note that the hello_world doesnt have brackets.

define( 'ADDON_CITYPLANNER_PATH', plugin_dir_path( __FILE__ ) );
// /home/nomeutente/sito.com/public_html/wp-content/plugins/my_plugin/

define( 'ADDON_CITYPLANNER_URL', plugin_dir_url( __FILE__ ) );
// http://sito.com/wp-content/plugins/my_plugin/

/**
 * Add a widget LAST USER LOGIN to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {
  //++my_console_log('example_add_dashboard_widgets()',2);
  // SOURCE know-how
  // AUTHOR PROVEDA
  // CREATE 180427
  // UPDATE 180511

	//$_SESSION['addon-geo'][] = 'f: example_add_dashboard_widgets';

	/*
		Aggiunta widget alla dashboard con gli ultimi accessi utente
	*/

  $title = 'Cityplanner';

  wp_add_dashboard_widget(
   'lastuserlogs_dashboard_widget',         // Widget slug.
   $title,         // Title.
   'lastuserlogs_dashboard_widget_function' // Display function.
  );

}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function lastuserlogs_dashboard_widget_function() {
	echo "
		<div id='published-posts' class='activity-block'>
			<h3>Tips</h3>
			<ul>
	";
	echo "<li><span><b>Prova</b></li>";
	echo "
			</ul>
		</div>
	";
}

add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
  wp_enqueue_script(
    'cityplanner', // name your script so that you can attach other scripts and de-register, etc.
    ADDON_CITYPLANNER_URL . 'js/addon-cityplanner.js', // this is the location of your script file
    array('jquery') // this array lists the scripts upon which your script depends
  );
}

add_action( 'wp', 'wpse69369_special_thingy' );
function wpse69369_special_thingy(){
  ?>
  <script>
    var get_vars = new Array;
    get_vars.var1='<?php echo $_GET['var1'];?>';
  </script>
  <?php
}
