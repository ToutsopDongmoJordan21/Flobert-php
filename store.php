<?php session_start(); 

$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');

$q = "SELECT * FROM product";
$result = mysqli_query($con, $q) or die('Something went wrong!');



?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
  <script src="bootstrap/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap1.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">
	<link href="store.css" rel="stylesheet" />
</head>
<body>
<?php include('header.php')?>
  <?php include('storeheader.php')?>
  
<div class="pager1"> 
	<div class="container">         
		<ul class="pager" >
		    <li class="previous"><a href="index.php">Previous</a></li>
		    <li class="next"><a href="product.php">Next</a></li>
		</ul>
    </div>
</div>

<div class="container-fluid">
    <div class="sales row">
        <div class="col-sm-12">
			<div class="products-box">
				   <?php while($product = $result->fetch_assoc()) { 
						$image = $product['image'];
						if(empty($image)){
						$image = "uploads/z1.jpg";
						}else $image = "uploads/".$image;	
						?>
				<div class="product">
							<div class="product-image" style="background: url('<?php echo $image;?>'); background-size: cover; background-position:center"></div>
							<div class="product-name"><?php echo $product['name']; ?></div>
							<div class="product-price">
								<?php echo $product['price']; ?>  FCFA &nbsp;&nbsp;&nbsp;
								<button onclick="addToCart(<?php  echo $product['id']; ?>)">Add to Cart</button>
                            </div>
                           
                </div>
                <?php } ?>
            </div>
		</div>
	</div>				
</div>

<div class="pager1"> 
	<div class="container">         
		<ul class="pager" >
		    <li class="previous"><a href="index.php">Previous</a></li>
		    <li class="next"><a href="product.php">Next</a></li>
		</ul>
    </div>
</div>
	<script src="app.js"></script>
	<?php include('footer.php')?>
</body>
</html>