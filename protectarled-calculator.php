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
		'incandescentes' =>[
			'title' => 'incandescentes',
			'img' 	=> LEDCAL_IMG_PLUGIN_URL.'incandescentes.png',
			'childs'=> [
				'plafon' => [
					'title'	=> 'Bombillo(s) de plafón',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'incandescente/de_plafon.png',
					'variation' => [
						[
							'value'=> [
								'power'=>60,
								'label'=>60
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>9,
										'label'=>9
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>12,
										'label'=>12
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>100,
								'label'=>100
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=> [
										'power'=>15,
										'label'=>15
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>120,
								'label'=>120
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>15,
										'label'=>15
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						]
					]
				],
				'aplique'=> [
					'title'	=> 'aplique(s)',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'incandescente/de_aplique.png',
					'variation' => [
						[
							'value'=> [
								'power'=>60,
								'label'=>60
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>9,
										'label'=>9
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=> [
										'power'=>12,
										'label'=>12
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>100,
								'label'=>100
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>15,
										'label'=>15
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>120,
								'label'=>120
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>15,
										'label'=>15
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						]
					]
				],
				'buey' 	=>  [
					'title'	=> 'bombillo(s) ojo de buey',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'incandescente/ojo_de_buey.png',
					'variation' => [
						[
							'value'=> [
								'power'=>35,
								'label'=>35
							],
							'similar'=>[
								[
									'name'=>"panel de incrustar",
									'value'=>[
										'power'=>4,
										'label'=>4
									],
								],
								[
									'name'=>"dricroico",
									'value'=>[
										'power'=>5,
										'label'=>5
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>50,
								'label'=>50
							],
							'similar'=>[
								[
									'name'=>"dricroico",
									'value'=>[
										'power'=>5,
										'label'=>5
									],
								],
							]
						]
					]
				],

			],
		],
		'fluorescentes' =>[
			'title' => 'fluorescentes',
			'img' 	=> LEDCAL_IMG_PLUGIN_URL.'fluorescentes.png',
			'childs'=> [
				'plafon' => [
					'title'	=> 'bombillo(s) de plafón',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/de_plafon.png',
					'variation' => [
						[
							'value'=> [
								'power'=>26,
								'label'=>26
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>26,
										'label'=>26
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>12,
										'label'=>12
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>35,
								'label'=>35
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>15,
										'label'=>15
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						]
					]
				],
				'aplique'=> [
					'title'	=> 'aplique(s)',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/de_apliques.png',
					'variation' => [
						[
							'value'=> [
								'power'=>26,
								'label'=>26
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>9,
										'label'=>9
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>12,
										'label'=>12
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>35,
								'label'=>35
							],
							'similar'=>[
								[
									'name'=>"bombillo led",
									'value'=>[
										'power'=>15,
										'label'=>15
									],
								],
								[
									'name'=>"panel de sobreponer",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						]
					]
				],
				'balas' 	=>  [
					'title'	=> 'bombillo(s) balas',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/de_bala.png',
					'variation' => [
						[
							'value'=> [
								'power'=>18,
								'label'=>18
							],
							'similar'=>[
								[
									'name'=>"panel de incrustar",
									'value'=>[
										'power'=>12,
										'label'=>12
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>35,
								'label'=>35
							],
							'similar'=>[
								[
									'name'=>"panel de incrustar",
									'value'=>[
										'power'=>18,
										'label'=>18
									],
								],
							]
						]
					]
				],
				'portalámparas'	 =>  [
					'title'	=> 'portalámparas',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'fluorecente/portatubos.png',
					'variation' => [
						[
							'value'=> [
								'power'=>64,
								'label'=>"2x32"
							],
							'similar'=>[
								[
									'name'=>"tubos",
									'value'=>[
										'power'=>36,
										'label'=>"2x18"
									],
								],
								[
									'name'=>"paneles",
									'value'=>[
										'power'=>36,
										'label'=>36
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>68,
								'label'=>"4x17"
							],
							'similar'=>[
								[
									'name'=>"tubos",
									'value'=>[
										'power'=>36,
										'label'=>"4x9"
									],
								],
								[
									'name'=>"paneles",
									'value'=>[
										'power'=>36,
										'label'=>36
									],
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
				'metálico' => [
					'title'	=> 'reflector metálico',
					'img'	=> LEDCAL_IMG_PLUGIN_URL.'reflectores.png',
					'variation' => [
						[
							'value'=> [
								'power'=>60,
								'label'=>60
							],
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>[
										'power'=>30,
										'label'=>30
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>100,
								'label'=>100
							],
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>[
										'power'=>50,
										'label'=>50
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>200,
								'label'=>200
							],
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>[
										'power'=>100,
										'label'=>100
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>300,
								'label'=>300
							],
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>[
										'power'=>150,
										'label'=>150
									],
								],
							]
						],
						[
							'value'=> [
								'power'=>400,
								'label'=>400
							],
							'similar'=>[
								[
									'name'=>"reflectores led",
									'value'=>[
										'power'=>200,
										'label'=>200
									],
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
	var powerCost = 454.60;
	var similarProducts = [];
	</script>';

	wp_enqueue_script('led_calculator_script_main',LEDCAL_JS_PLUGIN_URL . 'script.js',array(),'1.0.0');

	wp_enqueue_style( 'led_calculator_style_main', LEDCAL_STYLE_PLUGIN_URL.'style.css', array(), $ver = '1.0.0', $media = 'all' );
	wp_enqueue_style( 'led_calculator_style_bottom', LEDCAL_STYLE_PLUGIN_URL.'bottom.css', array(), $ver = '1.0.0', $media = 'all' );
	?>

	<div id="Calculator">
		
		<h4>Revisemos que iluminación tienes actualmente</h4>
		<p class="calculator-intro"> Agregar tipos y cantidad de bombillos actuales</p>

		<div id="cal-cart">
			
			<div id="cal-container" class="cal-container">
				
			</div>

			<div class="more-button">
				<a class="led-button" onclick="addElement()"><div class="bg-AGREGAR_MAS"></div><span>Agregar</span></a>
				<a id="led-button-calculate" class="led-button" onclick="calculate()" style="display:none"><div class="bg-CALCULAR"></div><span>Calcular</span></a>
			</div>
			
		</div>
	</div>
	<?php
	include_once(LEDCAL_PLUGIN_DIR.'includes/modal_selector.php');

}

?>
