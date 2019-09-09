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
	define( 'LEDCAL_JS_PLUGIN_URL', LEDCAL_PLUGIN_URL.'includes/js/');
}
if ( ! defined( 'LEDCAL_STYLE_PLUGIN_URL' ) ) {
	define( 'LEDCAL_STYLE_PLUGIN_URL', LEDCAL_PLUGIN_URL.'includes/css/');
}


/*

class Led_calculator extends WP_Widget{
	
	public function __construct(){

		$widget_opts = array(
			'classname' => 'Led_calculator',
			'description' => 'know proyectar led suggestions',
		);
		parent::__construct('Led_calculator', 'led_calculator', $widget_opts);
	}

	public function widget($args, $instance){

		echo "Hola mundo";

	}

	public function form($instance){}

	public function update($new_instance, $old_instance){}

}*/


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
				<div class="plus-button"><a>+</a></div>
				<span>Agregar</span>
			</div>
			
		</div>

	</div>


	<?php

}

//add_shortcode( 'led_calculator', function(){return "esto es una prueba";});

?>
