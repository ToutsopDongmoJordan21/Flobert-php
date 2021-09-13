<?php

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $mark = $_POST['mark'];
        $size = $_POST['size'];
        $image = $_FILES['image'];

        // upload 
        $upload_dir = "uploads/";

        $tmp = $_FILES['image']['tmp_name'];
        $image = $_FILES['image']['name'];

        move_uploaded_file($tmp, $upload_dir.$image);


		$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');

		// make a query
		mysqli_query($con, "INSERT INTO product (name, quantity, price, mark, size, image)VALUES('$name', '$quantity', '$price', '$mark', '$size', '$image')");
		if(mysqli_error($con)) die("Unsuccessful".mysqli_error($con));
		else die ("Successfully!");

	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Sales admin</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
  <script src="bootstrap/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap1.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">
  <link rel="stylesheet" type="text/css" href="product.css">

</head>
<body>
<?php include('header.php')?>
<div class="pager2"> 
<div class="container">
                 
  <ul class="pager" >
    <li class="previous"><a href="store.php">Previous</a></li>
    <li class="next"><a href="#.php">Next</a></li>
  </ul>
</div>
 </div>



<div class="container-fluid">
	<div class="addToCart row">
		<div class="col-sm-3"></div>

		<div class="col-sm-6">
			<h1>Add New Product</h1>
			<br><br>
	<form action="" method="post" enctype="multipart/form-data">
		Product Name:<input type="text"  name="name" value="" required="" />
		<br><br>
        Quantity:<input type="number" name="quantity" placeholder="" required="" />
        <br><br>
        Price:<input type="number" name="price" placeholder="" required="">
        <br><br>
        Mark:<input type="text" name="mark" value="" required="">
        <br><br>
         Size:<select type="text" name="size" value="size" required="" />
           <option>Big</option>
           <option>Medium</option>
           <option>Small</option>
         </select> 
         <br><br>
        Image:<input type="file" name="image"/>
        <br><br>
		<input type="submit" name="submit" value="Add Product"/>
    <input type="reset">
	</form>
		</div>
<div class="col-sm-3"></div>
	
	</div>
</div>
<?php include('footer.php')?>
</body>
</html>