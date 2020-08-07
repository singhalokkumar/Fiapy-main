<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/service/servicesstyle.css">
	<style type="text/css">
		/*==================nav=========================*/
body{
	background: url(images/background.jpg);
}
#nav{
	height: 60px;
	padding: 0px;
	}		/*=================Service menu====================*/
#service-menu{
		height: 100px;
		padding-top: 35px;
}
#service-menu>ul>li{
	background-color: white;
	border-radius: 20px;
	border: .5px solid purple;
	color: purple;
	width: 165px;
	height: 50px;
	text-align: center;
	margin-left: 30px;
}
#service-menu>ul>li>a{
	padding-top: 10px; 
	color: purple;
}
/*================Service Catogories=====================*/
#serv-nav{
	margin-bottom: 20px;
	border-radius: 10px; 
	background-color: white; 
	padding: 0px; 
	text-align: center;
}
#serv-nav>ul>li>a{
	color: purple;
}
#overflow{
	height: 450px; border-radius: 10px;
}
#section1,#section2,#section3,#section4,#section5,#section6{
	padding-top:10px;
	padding-bottom:20px; 
	background-color:white;
}

/*=================items-list=========================*/
#item{
	height: 100px;
	width: 600px; 
	border: 1px solid #ddd; 
	margin-top: 30px; 
	margin-left: 0px; 
	padding-left: 20px;
}
#item-img{
	display: inline;
	position: relative;
}
#item-img>img{
	height: 80px;
	width: 80px;
	border: 1px solid black;
	margin-top: 10px;
	background: linear-gradient(to bottom, #FDA55F 0%, #FF6270 100%);
}
#item-desc{
	display: inline; 
	padding-left: 20px;
	padding-top: 20px;
}
#item-desc>p{
	margin-bottom: 0;
}
#quantity{
	height: 50px;
	width: 100px; 
	display: inline;
	margin-left: 250px; 
	margin-top: 25px;
}
form {
  width: 130px;
  margin: 0 auto;
  text-align: center;
  padding-top: 0px;
}

.value-button {
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 40px;
  background-color: purple !important;
  color: white;
  text-align: center;
  vertical-align: middle;
  padding-top: 3px;
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.value-button:hover {
  cursor: pointer;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

input#number {
  text-align: center;
  border: none;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  width: 40px;
  height: 40px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
/*====================cart=====================*/
#cart{
	width: 500px; 
	background: white;
	height:450px;
	border-radius: 10px;
	margin-top: 20px;
}
#cart-nav{
	height: 60px; 
	text-align: center; 
	padding-top: 10px;
}
#items-area{
	background: linear-gradient(to bottom right, #FDA55F 0%, #FF6270 100%);
	height: 390px;
	padding-top: 10px;
}
#cart-items{
	height: 30px;
	border-bottom: 1px solid #ddd;
	padding-left: 10px;
	color: white;
	margin: 10px;
}
#checkout{
	width: 100%;
	height: 50px; 
	margin-top: 10px; 
	margin-right: 10px;
}
	</style>
</head>
<body>
	<!--         nav       -->
<section>
	<nav class="navbar navbar-light bg-light" id="nav">
		<div class="container">
  			<a class="navbar-brand" href="#">
    			<h3>Company Logo</h3>
 			 </a>
  			<div>
		</div>
	</nav>
	
</section>

<!--          service menu           -->

<section>
	<div class="container" id="service-menu">
	<ul class="nav justify-content-center">
  <li class="nav-item" >
    <a class="nav-link" href="#" style="">Electrician</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Grooming</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Laundry</a>
  </li>
</ul>
	</div>
</section>

<!--              service-menu          -->
								

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
			<div data-spy="scroll" data-target=".navbar" data-offset="50" style="width: 650px; margin-top: 20px;">
				<nav class="navbar navbar-expand-sm" id="serv-nav">  
				  <ul class="navbar-nav">
				    <li class="nav-item" style="width: 125px;">
				      <a class="nav-link" href="#section1">Switch/Socket</a>
				    </li>
				    <li class="nav-item" style="width: 100px;">
				      <a class="nav-link" href="#section2">Fan</a>
				    </li>
				    <li class="nav-item" style="width: 105px;">
				      <a class="nav-link" href="#section3">Light</a>
				    </li>
				    <li class="nav-item" style="width: 105px;">
				      <a class="nav-link " href="#section4">MCB/Fuse</a>
				    </li>
				    <li class="nav-item" style="width: 105px;">
				      <a class="nav-link " href="#section5">Wiring</a>
				    </li>
				   <li class="nav-item" style="width: 105px;">
				      <a class="nav-link " href="#section6">Others</a>
				    </li>
				  </ul>
				</nav>

				<?php

						// Set Conncetion variables
						$server = "localhost";
						$username = "root";
						$password = "";
						$dbname = "fiapy-db";

						// Create Connection 
						$con = mysqli_connect($server,$username,$password,$dbname);

						// Check For The Conncection
						if(!$con){
							die("Connection is not created ". mysqli_connect_error());
						}


					


					function product($product_name,$product_cost){

						$element="
						<div id=\"item\" class=\"row\">
								<div id=\"item-img\"><img src=\"\"></div>
								<div id=\"item-desc\"><p>$product_name</p><p><i class="fa fa-rupee"></i>$product_cost</p></div>
								<div id=\"quantity\">
									<form>
										<div class=\"row\">
								  			<div class=\"value-button\" id=\"decrease\" onclick=\"decreaseValue()\" value=\"Decrease Value\" >-</div>
								  			<div><input type=\"number\" id=\"number\" value=\"0\" /></div>
								  			<div class=\"value-button\" id=\"increase\" onclick=\"increaseValue()\" value=\"Increase Value\">+</div>
										</div>
									</form>
								</div>
							</div>
						";

						echo $element;
					}
				?>


				<div class="overflow-auto" id="overflow">
					<div id="section1" class="container-fluid">
					  	<div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
						  	<?php
						$sql = "SELECT * from `product` where item_type = 'Switch/Socket'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {

						  	product($row['name'],$row['cost']);
						  	}
						  	?>
						</div>
					<div id="section2" class="container-fluid">
					  <div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
						  	<?php
						$sql = "SELECT * from `product` where item_type = 'Fan'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {

						  	product($row['name'],$row['cost']);
						  	}
						  	?>
						</div>
					<div id="section3" class="container-fluid">
					  <div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
						  	<?php
						$sql = "SELECT * from `product` where item_type = 'Fan'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {

						  	product($row['name'],$row['cost']);
						  	}
						  	?>
						</div>
					<div id="section4" class="container-fluid">
					  <div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
						  	<?php
						$sql = "SELECT * from `product` where item_type = 'Fan'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {

						  	product($row['name'],$row['cost']);
						  	}
						  	?>
						</div>
					<div id="section5" class="container-fluid">
					  <div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
						  	<?php
						$sql = "SELECT * from `product` where item_type = 'Fan'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {

						  	product($row['name'],$row['cost']);
						  	}
						  	?>
						</div>
					<div id="section6" class="container-fluid">
					  <div style="border-bottom: 1px solid #ddd;"><p style="margin-bottom: 0;">Switches/Sockets</p></div>
						  	<?php
						$sql = "SELECT * from `product` where item_type = 'Fan'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {

						  	product($row['name'],$row['cost']);
						  	}
						  	?>
					</div>
				</div>
			</div>
		</div>
			<div class="col-lg-3">
				<div id="cart">
					<div id="cart-nav"><h3>Cart<i class="fa fa-shopping-cart"></i><span id="quantity1">0</span></h3></div>
					<div id="items-area">
						
					</div>
					<button type="button" class="btn btn-success" id="checkout"></button>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>


let obj = <?php 
$sql = "SELECT name,cost,incart,id from `product` where item_type = 'Switch/Socket'";

						$result = mysqli_query($con,$sql);
						  	while ($row = mysqli_fetch_assoc($result)) {
						  	echo json_encode($row);
						  }?>;
						  
let JS_obj = JSON.stringify(obj);
let res = JSON.parse(JS_obj); 
let product=[];

for (var j in res) {
	product.push(res[j]);

};
product.name=product[0];
product.cost=product[1];
product.incart=product[2];
product.id=product[3];

product.id=parseInt(product.id);
product.cost=parseInt(product.cost);
product.incart=parseInt(product.incart);
let products = [];

for (var i=0;i<10;i++){
	products=[{
		name:product.name,
		cost: product.cost,
		incart:product.incart,
	},
];
console.log(products);
console.log(i);
}
	let cart = document.querySelectorAll('#increase');
let removecart = document.querySelectorAll('#decrease');
for (let i=0;i < cart.length; i++) {
	cart[i].addEventListener('click',()=>{
		cartNumbers(products[i]);
		totalCost(products[i]);
	})
}
for (let i=0;i < cart.length; i++) {
	removecart[i].addEventListener('click',()=>{
		cartNumbersDec(products[i]);
		removetotalCost(products[i]);
	})
}



function onLoadCartNmbers(){
	let productNumbers = localStorage.getItem('cartNumbers');

	if (productNumbers) {
		document.querySelector('#quantity1').textContent =productNumbers;
	}
}


function cartNumbers(products){
	let productNumbers = localStorage.getItem('cartNumbers');

	productNumbers = parseInt(productNumbers);
	if (productNumbers) {
	localStorage.setItem('cartNumbers',productNumbers+1);
	document.querySelector('#quantity1').textContent = productNumbers+1;
}
else{
	localStorage.setItem('cartNumbers',1);
	document.querySelector('#quantity1').textContent = 1;
}
setItems(products);
}
function cartNumbersDec(products){
	let productNumbers = localStorage.getItem('cartNumbers');

	productNumbers = parseInt(productNumbers);
	if (productNumbers>0) {
	localStorage.setItem('cartNumbers',productNumbers-1);
	document.querySelector('#quantity1').textContent = productNumbers-1;
}
else{
	localStorage.setItem('cartNumbers',1);
	document.querySelector('#quantity1').textContent = 1;
}
removeItems(products);
}
function setItems(products){
	let cartItems = localStorage.getItem('productsInCart');
	cartItems=JSON.parse(cartItems);

	if (cartItems!=null) {
		if (cartItems[products.name] == undefined) { 
			cartItems = {
				...cartItems,
				[products.name]:products
			}
		}
		cartItems[products.name].incart += 1;
	}
	else{
	products.incart=1;
	cartItems={
			[products.name]: products
		}
	}
	localStorage.setItem("productsInCart",JSON.stringify(cartItems));
	console.log(cartItems);
}
function removeItems(products){
	let cartItems = localStorage.getItem('productsInCart');
	cartItems=JSON.parse(cartItems);

	if (cartItems!=null) {
		if (cartItems[products.name] == undefined) { 
			cartItems = {
				...cartItems,
				[products.name]:products
			}
		}
		cartItems[products.name].incart -= 1;
	}
	else{
	products.incart=1;
	cartItems={
			[products.name]: products
		}
	}
	localStorage.setItem("productsInCart",JSON.stringify(cartItems));
}

function totalCost(products){

	let cartCost = localStorage.getItem('totalCost');

	if (cartCost!=null) {
		cartCost=parseInt(cartCost);
		localStorage.setItem("totalCost",cartCost+products.cost);
	}
	else{
		localStorage.setItem("totalCost",products.cost);
	}
	console.log(cartCost);
	
}
function removetotalCost(products){

	let cartCost = localStorage.getItem('totalCost');

	if (cartCost!=null) {
		cartCost=parseInt(cartCost);
		localStorage.setItem("totalCost",cartCost-products.cost);
	}
	else{
		localStorage.setItem("totalCost",products.cost);
	}
	console.log(cartCost);
	
}


function displayCart(){
	let cartItems = localStorage.getItem("productsInCart");
	let cartCost = localStorage.getItem('totalCost');
	cartItems = JSON.parse(cartItems);
	let cartList = document.querySelector("#items-area");
	let qty = document.querySelector("#number");
	let checkOut = document.querySelector("#checkout");

	if (cartItems && cartList) {

		console.log(cartItems);
		cartList.innerHTML = '';
		Object.values(cartItems).map(item =>{
			cartList.innerHTML += `
				<div>
					<div id="cart-items"><strong>${item.name} -  <i class="fa fa-rupee"></i> ${item.cost} X ${item.incart} pc ...... <i class="fa fa-close"></i></strong></div>
				</div>
			`;
			});
		Object.values(cartItems).map(item =>{
			qty.value= `${item.incart}`;
			});
		checkOut.innerHTML += `
		<strong>CheckOut<i class="fa fa-rupee"></i>${cartCost}</strong>
		`;


	}
}
onLoadCartNmbers();
displayCart();</script>
</body>
</html>