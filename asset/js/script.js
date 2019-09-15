function addElement() {
	let modal = document.getElementById('led-modal');
	let modal_cat = document.getElementById('modal-cat');
	let modal_product = document.getElementById('modal-product');
	modal.style.display='block';
	modal_cat.style.display='block';
	modal_product.style.display='none';
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
	document.getElementById('modal-cat').style.display='none';
	document.getElementById('modal-product').style.display='block';
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
		led_variaton.value=variation;
		led_variaton.innerHTML=variation+" W";
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
	const htmlSting = `
		<div class="product-item">  
			<div class="product-img-container">
				<img src="${item.img}" alt="${item.title}" class="product-img" />
			</div>
			<div class="product-content">
				<strong class="product-name">
					${product.quantity} bombillo(s) ${item.title} de ${product.power} w
				</strong>
				<div class="product-button">
					<a class="button-update">modificar</a>
					<a class="button-delete">Eliminiar</a>
				</div>
			</div>

		</div>

	`;
	let divProduct = document.getElementById('cal-container');
	divProduct.innerHTML+=htmlSting;

	console.log(product);
}