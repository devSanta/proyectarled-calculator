<div id="modal-cat" class="led-modal-content" style="display:none;">
	<p class="led-modal-text">
		¡Selecciona el tipo de bombillo que quieres agregar!
	</p>

	<div class="led-modal-img">
		<?php foreach($led_category_tree as $led_category){?>
		<a onclick="selectModal('<?php echo $led_category['title'];?>')" class="led-modal-product-select button">
			<img src="<?php echo $led_category['img']; ?>" alt="<?php $led_category['title'];?>" class="led-select-img">
			<p class="modal-img-cap"><?echo $led_category['title'] ?></p>
			</a>
			<?php }?>
	</div>

</div> 