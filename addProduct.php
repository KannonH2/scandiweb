<?php 
	include 'db.php';

	$SKU_BD = isset($_POST['sku']) ? $_POST['sku'] : null;
	$Name_BD = isset($_POST['name']) ? $_POST['name'] : null;	
	$Price_BD = isset($_POST['price']) ? $_POST['price'] : null;
	$Select_BD = isset($_POST['productType']) ? $_POST['productType'] : null;
	$Size_BD = isset($_POST['size']) ? $_POST['size'] : null;
	$Weight_BD = isset($_POST['weight']) ? $_POST['weight'] : null;
	$Height_BD = isset($_POST['height']) ? $_POST['height'] : null;
	$Width_BD = isset($_POST['width']) ? $_POST['width'] : null;
	$Length_BD = isset($_POST['length']) ? $_POST['length'] : null;
	

	if(($SKU_BD && $Name_BD && $Price_BD) <> null){
		switch ($Select_BD) {
			case 'DVD':
				if ($Size_BD <> null) {
					
					$query = "INSERT INTO dvd(SKU, Name, Price, Size) VALUES('$SKU_BD', '$Name_BD', $Price_BD, $Size_BD)";
					mysqli_query($conection, $query);
				}
				break;
			case 'Book':
				if ($Weight_BD <> null) {

					$query = "INSERT INTO book(SKU, Name, Price, Weight) VALUES('$SKU_BD', '$Name_BD', $Price_BD, $Weight_BD)";
					mysqli_query($conection, $query);
				}
				break;
			case 'Furniture':
				if (($Height_BD && $Width_BD && $Length_BD) <> null) {
				
					$query = "INSERT INTO furniture(SKU, Name, Price, Height, Width, Length) VALUES('$SKU_BD', '$Name_BD', $Price_BD, $Height_BD, $Width_BD, $Length_BD)";
					mysqli_query($conection, $query);
				}
				break;	
			default:
				// code...
				break;
		}	
	}
	Header('location:index.php');	
?>