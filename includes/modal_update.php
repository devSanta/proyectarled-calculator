<?php ?>
<div id="modal-update-product" class="led-modal-content" style="display:none;">
	<input id="update-product-id" type="hidden" name="product-id">
	<p class="led-modal-text">
		¿Qué caracterizticas tienen y que cantidad?
	</p>

	<div class="cat-selected">
		<input type="hidden" id="update-cal-product-category" name="cal_product_category" value="">
		<span id="update-cat-tittle" class="cat-tittle"></span>
		<img id="update-cat-img" src="" alt="" class="led-select-img">
	</div>

	<div id="update-select-product" class="led-modal-img">
				 
	</div>
	
	<div id="update-product-options">
		<label for="update-product-quantity">Cantidad</label>
		<input id="update-product-quantity" class="update-value" type="number" name="quantity" min="0" value="1">
		<label for="update-product-power">Vatios</label>
		<select name="power" id="update-product-power" class="update-value"></select>
	</div>

	<div id="update-product-button">
		<a onclick="updateProduct()" class="led-product-button">modificar</a>
	</div>

</div>