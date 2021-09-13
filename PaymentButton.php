<?php

if(isset($_POST['button'])){
		$price_per_unit = $_POST['price_per_unit'];
        $date = $_POST['date'];
        $Quantity_sold = $_POST['Quantity_sold'];
        $product_id = $_POST['product_id'];
       
      
		$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');

		// make a query
		mysqli_query($con, "INSERT INTO sales (price_per_unit, date, Quantity_sold, product_id,)SELECT FROM ('$price_per_unit', '$date', '$Quantity_sold', '$product_id')");
		if(mysqli_error($con)) die("Unsuccessful".mysqli_error($con));
		else die ("Successfully!");
}
?>