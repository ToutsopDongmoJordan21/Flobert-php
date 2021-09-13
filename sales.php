<?php

	if(isset($_POST['submit'])){
		$price_per_unit = $_POST['price_per_unit'];
        $date = $_POST['date'];
        $Quantity_sold = $_POST['Quantity_sold'];
        $product_id = $_POST['product_id'];
       
      
		$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');

		// make a query
		mysqli_query($con, "INSERT INTO sales (price_per_unit, date, Quantity_sold, product_id,)VALUES('$price_per_unit', '$date', '$Quantity_sold', '$product_id')");
		if(mysqli_error($con)) die("Unsuccessful".mysqli_error($con));
		else die ("Successfully!");

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
  <script src="bootstrap/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="sales.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap1.css">

</head>
<body>
	<?php include('header.php')?>
<body>
<div class="pagerS"> 
<div class="container">
                 
  <ul class="pager" >
    <li class="previous"><a href="product.php">Previous</a></li>
    <li class="next"><a href="login.php">Next</a></li>
  </ul>
</div>
 </div>
<div class="container-fluid">
	<div class="sle row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<form>
				Price per Unit:<input type="number" name="Pnumber" placeholder="price_per_unit" required="">
				<br><br>
				Date:<input type="Date" name="date" required="">
				<br><br>
				Quantity Sold:<input type="number" name="Qnumber" placeholder="Quantity_sold" required="">
				<br><br>
				Produc Name:<input type="text" name="Ptext" placeholder="name" required="">
				<br><br>
				<input type="submit" name="submit" placeholder="add to sales">
				<input type="reset">
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
<?php include('footer.php') ?>
</body>
</html>