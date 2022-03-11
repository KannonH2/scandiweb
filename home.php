<style>
<?php include 'Style/style.css'; ?>
</style>

<form action="delete.php" method="post" >
	<h3>Product List</h3>
	<div class="Align">
		<button type="submit" name="delete-product-btn" id="delete-product-btn">MASS DELETE</button>
		<button type="button" onclick="location.href='add.php';" >ADD</button>

	</div>

	<br><br><br><br>

	<?php
	    $query = "SELECT * FROM dvd";

        $consulta = mysqli_query($conection, $query);
		while ($linea = mysqli_fetch_array($consulta)) {
	?>
			<div class="row">
				<p class="info">
					<input type="checkbox" id="checkbox" name="DVD[]" class="delete-checkbox" value="<?php echo $linea['ID_DVD']?>">
					<?php
						echo "DVD".'<br>';
						echo 'SKU: '.$linea['SKU'].'<br>';
						echo 'Name: '.$linea['Name'].'<br>';
						echo 'Price: '.$linea['Price'].'<br>';
						echo 'Size: '.$linea['Size'];
					?>
				</p>
			</div>
	<?php
		}
		$query = "SELECT * FROM book";

		$consulta = mysqli_query($conection, $query);
        echo mysqli_error($conection);
		while ($linea = mysqli_fetch_array($consulta)) {
	?>
			<div class="row">
				<p class="info">
					<input type="checkbox" id="checkbox" name="BOOK[]" class="delete-checkbox" value="<?php echo $linea['ID_BOOK']?>">
					<?php
						echo "Book".'<br>';
						echo 'SKU: '.$linea['SKU'].'<br>';
						echo 'Name: '.$linea['Name'].'<br>';
						echo 'Price: '.$linea['Price'].'<br>';
						echo 'Weight: '.$linea['Weight'];
					?>
				</p>	
			</div>
	<?php
		}
		$query = "SELECT * FROM furniture";

		$consulta = mysqli_query($conection, $query);
		
		while ($linea = mysqli_fetch_array($consulta)) {
	?>
			<div class="row">
				<p class="info">
					<input type="checkbox" id="checkbox" name="FURNITURE[]" class="delete-checkbox" value="<?php echo $linea['ID_FORNITURE']?>">
					<?php
						echo "Furniture".'<br>';
						echo 'SKU: '.$linea['SKU'].'<br>';
						echo 'Name: '.$linea['Name'].'<br>';
						echo 'Price: '.$linea['Price'].'<br>';
						echo 'Dimension: '.$linea['Height'].'x'.$linea['Width'].'x'.$linea['Length'];
					?>
				</p>
			</div>
	<?php
		}
	?>
</form>