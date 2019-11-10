function addElement() {
	openModal('modal-cat');
}
function closeModal(){
	let modal = document.getElementById('led-modal');
	modal.style.display='none';
}	
function selectModal(type){
	let led_category = led_category_tree[type];
	let childs = Object.keys(led_category.childs);
	let childHtml =``;

	for (var i = 0; i < childs.length; i++) {
		let key = childs[i];
		let item = led_category.childs[key];
		childHtml+=`
			<a onclick="checkProduct(${i})" class="led-modal-product-select button">
				<p class="modal-img-cap">${item.title}</p>
				<img src="${item.img}" alt="${item.title}}" class="led-select-img">
				<input type="radio" name="product_selected" value="${key}">
			</a>
		`;
	}

	document.getElementById('cat-img').src=led_category.img;
	document.getElementById('cat-tittle').innerHTML=led_category.title;
	document.getElementById('cal-product-category').value=type;
	document.getElementById('select-product').innerHTML=childHtml;
	openModal('modal-product');
}
function checkProduct(itemSelected){
	let selectedProduct = document.getElementById('select-product');
	let productSelected = selectedProduct.getElementsByTagName('input')[itemSelected];
	let selectedPower = document.getElementById('product-power');
	let led_category = document.getElementById('cal-product-category').value;
	let childVariation = led_category_tree[led_category].childs[productSelected.value].variation;
	let variation;
	selectedPower.innerHTML="";

	for (var i = 0; i < childVariation.length; i++) {
		variation = childVariation[i];
		let led_variaton = document.createElement('option');
		led_variaton.value=variation.value;
		led_variaton.innerHTML=variation.value+" W";
		selectedPower.appendChild(led_variaton);
	}
	productSelected.checked=true;

}
function setProduct(){
	let product ={};
	product.quantity = document.getElementsByName('quantity')[0].value;
	product.power = document.getElementsByName('power')[0].value;
	product.type = getCheckedValue('product_selected');
	product.category = document.getElementById('cal-product-category').value;


	drawProduct(product);
	closeModal();
}
function getCheckedValue(nameRadio){
	let inputRadio = document.getElementsByName(nameRadio);
	for(let i=0; i<inputRadio.length; i++){
		let itemRadio = inputRadio[i];
		if (itemRadio.checked)
			return itemRadio.value;
	}
	return null;
}
function drawProduct(product){
	let item = led_category_tree[product.category].childs[product.type];
	product.id = totalProducts++;
	const htmlSting = `
		<div id="led-product-${product.id}" class="product-item">  
			<div class="product-img-container">
				<img src="${item.img}" alt="${item.title}" class="product-img" />
			</div>
			<div class="product-content">
				<strong class="product-name" id="led-product-${product.id}-title">
					${product.quantity} bombillo(s) ${item.title} de ${product.power} W
				</strong>
				<div class="product-button">
					<a class="led-button button-update" onclick="ledUpdate(${product.id})"><div class="bg-CAMBIAR_OPCIONES"></div><span>modificar</span></a>
					<a class="led-button button-delete" onclick="ledRemove(${product.id})"><div class="bg-AGREGAR_MAS"></div><span>Eliminiar</span></a>
				</div>
			</div>

		</div>

	`;
	let divProduct = document.getElementById('cal-container');
	divProduct.innerHTML+=htmlSting;
	productSelected.push(product);
	if(productSelected.length>0){
		document.getElementById('led-button-calculate').style.display="";
	}
}
function ledUpdate(itemId){
	var updateModal ={
		quantity : document.getElementById('update-product-quantity'),
		power : document.getElementById('update-product-power'),
		img : document.getElementById('update-cat-img'),
		id : document.getElementById('update-product-id')
	};
	var item = productSelected.find(items=>items.id===itemId);
	var catUpdate = led_category_tree[item.category].childs[item.type];
	updateModal.quantity.value = item.quantity;
	updateModal.img.src = catUpdate.img;
	updateModal.id.value = item.id;
	updateModal.power.innerHTML = "";
	catUpdate.variation.forEach(element => {
		let option = document.createElement('option');
		option.value = element.value;
		option.innerHTML = element.value;
		option.selected = element.value === item.power;		
		updateModal.power.appendChild(option);		
	});
	openModal('modal-update-product');
}
function ledRemove(itemId){
	var item = productSelected.find(items=>items.id===itemId);
	document.getElementById('led-product-'+item.id).remove();
	productSelected.pop(item);
	console.log(productSelected);
	if(productSelected.length<=0){
		document.getElementById('led-button-calculate').style.display="none";
	}
}
function openModal(modalId){
	var modal = document.getElementById('led-modal');
	modal.style.display='block';
	var modals = document.getElementsByClassName('led-modal-content');
	for(var i=0; i<modals.length;i++){
		modals[i].style.display='none';
	}
	modals[modalId].style.display='block';
}
function updateProduct(){
	const productId = document.getElementById('update-product-id').value;
	const updateValues = document.getElementsByClassName('update-value');
	var productTitle = document.getElementById('led-product-'+productId+'-title');
	var product = productSelected.find(items=>items.id==productId);
	product.quantity = updateValues.quantity.value;
	product.power = updateValues.power.value;
	productTitle.innerHTML = `${product.quantity} bombillo(s) ${product.type} de ${product.power} w`;
	closeModal();
}