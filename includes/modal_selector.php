<?php 

?>


<div id="led-modal" class="led-modal" style="/*display: none;*/">
	
	<a onclick="closeModal()" id="close-time">x</a>

	<div class="led-modal-content">
		<p class="led-modal-text">
			¡Selecciona el tipo de bombillo que quieres agregar!
		</p>

		<div class="led-modal-img">
			<a onclick="selectModal(1)" class="led-modal-product-select">
			 	<img src="<?php echo LEDCAL_IMG_PLUGIN_URL.'incandecente.jpg'?>" alt="Incandecentes" class="led-select-img">
			 	<p class="modal-img-cap">Incandecentes</p>
			 </a>
			 <a onclick="selectModal(2)" class="led-modal-product-select">
			 	<img src="<?php echo LEDCAL_IMG_PLUGIN_URL.'fluorecentes.jpg'?>" alt="Fluorecentes" class="led-select-img">
			 	<p class="modal-img-cap">Fluorecentes</p>
			 </a>
			 <a onclick="selectModal(3)" class="led-modal-product-select">
			 	<img src="<?php echo LEDCAL_IMG_PLUGIN_URL.'reflectores.jpg'?>" alt="Reflectores" class="led-select-img">
			 	<p class="modal-img-cap">Reflectores</p>
			 </a> 
		</div>

	</div> 


</div>