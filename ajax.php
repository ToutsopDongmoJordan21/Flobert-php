
<?php
$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga'); 
$ids = $_GET['ids'];

$ex=substr($ids,1,-1);

$ids=explode(',',$ex);

$products = [];
foreach ($ids as $id) {
	

	$q = "SELECT * FROM product WHERE id='$id'";

	$result = mysqli_query($con, $q);
	if($result->num_rows > 0){
		//create session and store user info
		$product = $result->fetch_assoc();
		array_push($products, $product);
	
    }
}

echo json_encode(array("products"=>$products));

?>