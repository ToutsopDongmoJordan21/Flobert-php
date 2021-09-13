<?php 

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$phone_number = $_POST['phone_number'];
		$dob = $_POST['dob'];
		$comment = $_POST['comment'];
		$password = $_POST['password'];

		$con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');
		//make a query
		mysqli_query($con, "INSERT INTO user1 (name, email, gender, phone_number, dob, comment, password)VALUES('$name', '$email', '$gender', '$phone_number', '$dob', '$comment', '$password')");
		if(mysqli_error($con)) die("Unsuccessful");
		else die('Done!');
	} 

	?>

	<?php 
       $emailErr = $password = $phone_numberErr = $genderErr = "";
      	$email = $password = $phone_number = $gender = "";
      	
	    		     if (empty($_POST["email"])){
	$emailErr = "Email is required";
}else{
	$email = test_input($_POST["email"]);
	//check if e-mail address is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailErr = "Invalid email format";
	}
}
if(empty($_POST["password"])){
	$hash = '$2y$07$BCryptRequires22Chrct/VlQH0pix;.0t1XkA8pw9dMXTpOq';
	if(password_verify('rasmuslerdorf', $hash)){
		echo '!the password is valid';
	}else{
		echo 'the is invalid';
	}
}


   if (empty($_POST["gender"])){
   	$gender = "Gender is required";
   }else{
   	$gender = test_input($_POST["gender"]);
   }
	  


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	?>
		
<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
  <script src="bootstrap/js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap1.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">

	<link rel="stylesheet"  href="signup.css">

</head>
<?php include('header.php')?>
<body>
<div class="pager1"> 
<div class="container">
                 
  <ul class="pager" >
    <li class="previous"><a href="index.php">Previous</a></li>
    <li class="next"><a href="login.php">Next</a></li>
  </ul>
</div>
 </div>

	<div class="container-fluid">
	    <div class="header2 row">
	    	<div class="col-sm-4">
	    		
	        </div>
	    	<div class="col-sm-6">
	    	
	    		<h1>welcome to the Signup page</h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    Name:<input type="text" id="fname" name="name" required="">
                    <br><br>
				    E-mail:<input type="email" id="e-mail" name="email" required="">
				    <span class="error"><?php echo $emailErr;?></span>
				    <br><br>
					Password:<input type="password" name="password" id="myInput" placeholder="password" required="" maxlength="10">
					 <span class="error"><?php echo $password;?></span>
					<br>
					<input type="checkbox" onclick="myFunction()">Show password
					<br><br>
					
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
					Date of birth:<input type="date" name="dob">
					<br><br>
					Phone number:<input type="number" id="fname" name="phone_number" required="">
					<span class="error"><?php echo $phone_numberErr;?></span>
					<br><br>
					Comment:<textarea name="comment" rows="5" cols="40" placeholder="some text..."></textarea>
					<br><br>
					Gender:
					<input type="radio" name="gender" value="female" required=""><b>F</b>
				    <input type="radio" name="gender" value="male" required=""><b>M</b>
				    <span class="error"><?php echo $genderErr;?></span>
				    <br><br>
				    <input type="submit" name="submit" value="Signup"/>
				    <input type="reset">
                </form>

                 <p>Thanks for your comprehention</p>
            </div>
           <div class="col-sm-2">
           	<?php echo "The time is " . date("h:i:sa"); ?>
            </div>


        </div>    
    </div>

<?php include('footer.php')?>


</body>
</html>