<?php
//Inizialize the session 
session_start();

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');
	//I make a query to retrieve iformation from the user
	$query = "SELECT id,email,password FROM user WHERE email='$email' && password='$password'";
	$result = mysqli_query($con, $query);
	if($result->num_rows > 0){
		
     header('Location:store.php');
		
	}else die('User does not exist, You need to sigup first by filling the form at the sigup page');
	
}

?>


<?php include('header.php')?>	
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
  <script src="bootstrap/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap1.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">

<link rel="stylesheet"  href="login.css">
</head>
<body>
	<div class="pager1"> 
<div class="container">
                 
  <ul class="pager" >
    <li class="previous"><a href="signup.php">Previous</a></li>
    <li class="next"><a href="index.php">Next</a></li>
  </ul>
</div>
 </div>

	<div class="container-fluid">
	    <div class="header3 row">
				    	<div class="col-sm-3">
				    		
			
			
	  </div>
	    	
	        <div class="col-sm-4">
	        	
	        	<h1>Welcome to the login page:</h1>
	        	<hr>
               
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

						E-mail:<input type="email" name="email" placeholder="email" required="">
						<br><br>
						Password:<input type="password" name="password" id="myInput" placeholder="password" required="" />
						<input type="checkbox" onclick="myFunction()">Show password
<script>

    function myFunction(){
		var x = document.getElementById("myInput");	
			if (x.type === "password"){
				x.type = "text";
			}else{
				x.type = "password";
				}
					}

</script>
						<br><br>
						<input type="submit" name="submit" value="Signin"/>
						<input type="reset">

					</form>
			</div>
<p id="demo"></p>
			<div class="col-sm-5">
	    		
             This is the current time: <?php echo date('H:i:s');?>
	        </div>


	    </div>
    </div>
<?php include('footer.php')?>
</body>
</html>