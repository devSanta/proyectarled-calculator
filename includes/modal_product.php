<?php ?>
<div id="modal-product" class="led-modal-content" style="display:none;">
	
	<p class="led-modal-text">
		¿Qué caracterizticas tienen y que cantidad?
	</p>

	<div class="cat-selected">
		<input type="hidden" id="cal-product-category" name="cal_product_category" value="">
		<span id="cat-tittle" class="cat-tittle"></span>
		<img id="cat-img" src="" alt="" class="led-select-img">
	</div>

	<div id="select-product" class="led-modal-img">
				 
	</div>
	
	<div id="product-options">
		<label for="product-quantity">Cantidad</label>
		<input id="product-quantity" type="number" name="quantity" min="0" value="1">
		<label for="product-power">Vatios</label>
		<select name="power" id="product-power"></select>
	</div>

	<div id="product-button">
		<a onclick="setProduct()" class="led-product-button">ok</a>
	</div>

</div>