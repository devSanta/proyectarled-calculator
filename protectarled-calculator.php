<?php /*
Plugin Name: Led Calculator
Plugin URI: https://github.com/devSanta/proyectarled-calculator
Description: Plugin by proyectarLed to make suggestions about their led products.
Author: Cristian Leandro Henao
Version:1.0.0
Author URI: https://github.com/devSanta
*/

//register widget

/*add_action('widgets_init', function(){
	register_widget('Led_calculator');
});


*/
if ( ! defined( 'LEDCAL_PLUGIN_DIR' ) ) {
	define( 'LEDCAL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'LEDCAL_PLUGIN_URL' ) ) {
	define( 'LEDCAL_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}
if ( ! defined( 'LEDCAL_JS_PLUGIN_URL' ) ) {
	define( 'LEDCAL_JS_PLUGIN_URL', LEDCAL_PLUGIN_URL.'asset/js/');
}
if ( ! defined( 'LEDCAL_STYLE_PLUGIN_URL' ) ) {
	define( 'LEDCAL_STYLE_PLUGIN_URL', LEDCAL_PLUGIN_URL.'asset/css/');
}
if ( ! defined( 'LEDCAL_IMG_PLUGIN_URL' ) ) {
	define( 'LEDCAL_IMG_PLUGIN_URL', LEDCAL_PLUGIN_URL.'asset/img/');
}


add_shortcode( 'led_calculator', 'led_calculator_shortcode');

function led_calculator_shortcode($atts){

	wp_enqueue_script('led_calculator_script_main',LEDCAL_JS_PLUGIN_URL . 'script.js',array(),'1.0.0');

	wp_enqueue_style( 'led_calculator_style_main', LEDCAL_STYLE_PLUGIN_URL.'style.css', array(), $ver = '1.0.0', $media = 'all' );
	

	?>

	<div id="Calculator">
		
		<h4>Revisemos que iluminación tienes actualmente</h4>
		<p> Agregar tipos y cantidad de bombillos actuales</p>

		<div id="cal-cart">
			
			<div id="cal-container" class="cal-container">
				
			</div>

			<div class="more-button">
				<a onclick="addElement()"><div class="plus-button">+</div></a>
				<span>Agregar</span>
			</div>
			
		</div>
	</div>
	<?php
	include_once(LEDCAL_PLUGIN_DIR.'includes/modal_selector.php');

}

?>
