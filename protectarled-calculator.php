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

function get_tree_categories(){
	$led_category_tree = [
		'incandecentes' =>[
			'title' => 'incandecentes',
			'img' 	=> LEDCAL_IMG_PLUGIN_URL.'incandescentes.png',
			'childs'=> [
				'plafon' => [
					'title'	=> 'de plafón',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'incandescente/de_plafon.png',
					'variation' => [
						[
							'value'=> 60,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>9
								],
								[
									'name'=>"panel de sobreponer",
									'value'=> 12
								],
							]
						],
						[
							'value'=> 100,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=> 15
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>18
								],
							]
						],
						[
							'value'=> 120,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>15
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>18
								],
							]
						]
					]
				],
				'aplique'=> [
					'title'	=> 'de aplique',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'incandescente/de_aplique.png',
					'variation' => [
						[
							'value'=> 60,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>9
								],
								[
									'name'=>"panel de sobreponer",
									'value'=> 12
								],
							]
						],
						[
							'value'=> 100,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>15
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>18
								],
							]
						],
						[
							'value'=> 120,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>15
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>18
								],
							]
						]
					]
				],
				'buey' 	=>  [
					'title'	=> 'ojo de buey',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'incandescente/ojo_de_buey.png',
					'variation' => [
						[
							'value'=> 35,
							'similar'=>[
								[
									'name'=>"panel de incrustar",
									'value'=>4
								],
								[
									'name'=>"dricroico",
									'value'=>5
								],
							]
						],
						[
							'value'=> 50,
							'similar'=>[
								[
									'name'=>"dricroico",
									'value'=>5
								],
							]
						]
					]
				],

			],
		],
		'fluorecentes' =>[
			'title' => 'fluorecentes',
			'img' 	=> LEDCAL_IMG_PLUGIN_URL.'fluorescentes.png',
			'childs'=> [
				'plafon' => [
					'title'	=> 'de plafón',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/de_plafon.png',
					'variation' => [
						[
							'value'=> 26,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>26
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>12
								],
							]
						],
						[
							'value'=> 35,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>15
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>18
								],
							]
						]
					]
				],
				'aplique'=> [
					'title'	=> 'de aplique',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/de_apliques.png',
					'variation' => [
						[
							'value'=> 26,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>9
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>12
								],
							]
						],
						[
							'value'=> 35,
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>15
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>18
								],
							]
						]
					]
				],
				'balas' 	=>  [
					'title'	=> 'balas',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/de_bala.png',
					'variation' => [
						[
							'value'=> 26,
							'similar'=>[
								[
									'name'=>"panel de incrustar",
									'value'=>12
								],
							]
						],
						[
							'value'=> 35,
							'similar'=>[
								[
									'name'=>"panel de incrustar",
									'value'=>18
								],
							]
						]
					]
				],
				'portalamparas'	 =>  [
					'title'	=> 'portalamparas',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/portatubos.png',
					'variation' => [
						[
							'value'=> "2x32",
							'similar'=>[
								[
									'name'=>"tubos",
									'value'=>"2x18"
								],
								[
									'name'=>"paneles",
									'value'=>36
								],
							]
						],
						[
							'value'=> "4x17",
							'similar'=>[
								[
									'name'=>"tubos",
									'value'=>"4x9"
								],
								[
									'name'=>"paneles",
									'value'=>36
								],
							]
						]
					]
				],

			],
		],
		'reflectores' =>[
			'title' => 'reflectores',
			'img' 	=> LEDCAL_IMG_PLUGIN_URL.'reflectores.png',
			'childs'=> [
				'metalico' => [
					'title'	=> 'reflector metalico',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'reflectores.png',
					'variation' => [
						[
							'value'=> 60,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>30
								],
							]
						],
						[
							'value'=> 100,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>50
								],
							]
						],
						[
							'value'=> 150,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>80
								],
							]
						],
						[
							'value'=> 200,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>100
								],
							]
						],
						[
							'value'=> 240,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>120
								],
							]
						],
						[
							'value'=> 300,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>150
								],
							]
						],
						[
							'value'=> 400,
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>200
								],
							]
						],
					]
				],
			],
		],

	];
	return $led_category_tree;
}




add_shortcode( 'led_calculator', 'led_calculator_shortcode');

function led_calculator_shortcode($atts){

	$led_category_tree=get_tree_categories();

	echo '<script type="text/javascript">
	const IMG_URL="'.LEDCAL_IMG_PLUGIN_URL.'";
	const led_category_tree='.json_encode($led_category_tree).';
	var productSelected = [];
	var totalProducts = 0;
	</script>';

	wp_enqueue_script('led_calculator_script_main',LEDCAL_JS_PLUGIN_URL . 'script.js',array(),'1.0.0');

	wp_enqueue_style( 'led_calculator_style_main', LEDCAL_STYLE_PLUGIN_URL.'style.css', array(), $ver = '1.0.0', $media = 'all' );
	wp_enqueue_style( 'led_calculator_style_bottom', LEDCAL_STYLE_PLUGIN_URL.'bottom.css', array(), $ver = '1.0.0', $media = 'all' );
	?>

	<div id="Calculator">
		
		<h4>Revisemos que iluminación tienes actualmente</h4>
		<p> Agregar tipos y cantidad de bombillos actuales</p>

		<div id="cal-cart">
			
			<div id="cal-container" class="cal-container">
				
			</div>

			<div class="more-button">
				<a class="led-button" onclick="addElement()"><div class="bg-AGREGAR_MAS"></div><span>Agregar</span></a>
				<a id="led-button-calculate" class="led-button" onclick="calculate()" style="display:none"><div class="bg-AGREGAR_MAS"></div><span>Calcular</span></a>
			</div>
			
		</div>
	</div>
	<?php
	include_once(LEDCAL_PLUGIN_DIR.'includes/modal_selector.php');

}

?>
