<?php 

#data base
include 'db.php';
#cabeçalho
include 'header.php';?>

<script src="assets/Js/jquery.min.js"></script>
<script type="text/javascript">
	function run(){
		var campo = document.getElementById("productType").selectedIndex;
		console.log(campo);
		if(campo == '1'){
	    	$("#endForm").html("<br><br><label>Size(MB)</label><br><input type=\"number\" name=\"size\" placeholder=\"Insert size(MB)\" id=\"size\" oninvalid=\"this.setCustomValidity('Enter Product Size(MB) Here')\" oninput=\"this.setCustomValidity('')\" required /><br>");
		}
		if(campo == '2'){
			$("#endForm").html("<br><br><label>Weight(KG)</label><br><input type=\"number\" name=\"weight\" placeholder=\"Insert weight(KG)\"id=\"weight\" oninvalid=\"this.setCustomValidity('Enter Product Weight(KG) Here')\" oninput=\"this.setCustomValidity('')\" required /><br>");
		}
		if(campo == '3'){
			$("#endForm").html("<br><br><label>Height(CM)</label><br><input type=\"number\" name=\"height\" placeholder=\"Insert height(CM)\" id=\"height\" oninvalid=\"this.setCustomValidity('Enter Product Height(CM) Here')\" oninput=\"this.setCustomValidity('')\" required /><br><br><label>Width(CM)</label><br><input type=\"number\" name=\"width\" placeholder=\"Insert width(CM)\"id=\"width\" oninvalid=\"this.setCustomValidity('Enter Product Width(CM) Here')\" oninput=\"this.setCustomValidity('')\" required /><br><br><label>Length(CM)</label><br><input type=\"number\" name=\"length\" placeholder=\"Insert length(CM)\"id=\"length\" oninvalid=\"this.setCustomValidity('Enter Product Length(CM) Here')\" oninput=\"this.setCustomValidity('')\" required /><br>");
		}
	}
</script>

<form method="post" action="addProduct.php" id="product_form"> 
	<h3>Product Add</h3>

	<div class="Align">

		<button type="button" id="cancel" onclick="location.href='index.php';">Cancel</button>
		
		<button type="submit" id="AddProduct">Save</button>

	</div>
	<br><br>
	
	<input type="text" name="sku" placeholder="Insert SKU" id="sku" oninvalid="this.setCustomValidity('Enter SKU Here)" oninput="this.setCustomValidity('')" required /><br>
	
	<br><label>Name</label><br>
	<input type="text" name="name" placeholder="Insert name" id="name" oninvalid="this.setCustomValidity('Enter Product Name Here')" oninput="this.setCustomValidity('')" required /><br>

	<br><label>Price($)</label><br>
	<input type="number" name="price" placeholder="Insert price" id="price" oninvalid="this.setCustomValidity('Enter Product Price Here')" oninput="this.setCustomValidity('')" required /><br>

	<br>

	<p>Select the type of the product</p>
	
	<select id="productType" name="productType" onchange="run()" oninvalid="this.setCustomValidity('Pick a Product Type')" oninput="this.setCustomValidity('')" required>
		<option value="" selected disabled>Select the type of the product</option>
		<option value='DVD' id="#DVD"> DVD </option>
		<option value='Book' id="#Book"> Book </option>
		<option value='Furniture' id="#Furniture"> Furniture </option>
	</select>

	<span id="endForm">
		
	</span>
</form>

<php
#rodapé
include 'footer.php';
?>
