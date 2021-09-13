
<!DOCTYPE html>
<html>
<head>
	<title>Nvóg Ekoga</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.">
  <script src="jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap1.css">
  <link rel="stylesheet"  href="dream.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">

</head>
<body>
		<div class="header row">
				<div class="col-sm-12">
				
					<h1 style="font-size:100px">Trade Centre</h1>
					<p>Vission,Wisdom & Hard Working</p>
                </div>
        </div>
<!--beginning of the the navegation section of the page-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="bootstrap/kdd/z5.jpg" width="60px" height="50px">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Repair & Maintenance</a></li>
          <li><a href="#">Teaching</a></li>
        </ul>
      </li>
      <li><a href="#">About us</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Conact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><i class="fa fa-user"></i> Sign Up</a></li>
      <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
    </ul>
  </div>
</nav>
</div>
<!--menu starts here -->
<div class="container-fluid">
<div class="body row">

<div class="col-sm-2">
	<div class="contact"><p>How can we help You?<br>
		Contact us at the Nvóg Ekoga office<br>
	or submit a business inquery online.</p>
	<p class="contact-1"><i class="fa fa-phone-square" style="color:#D8A355"></i> contacts</p>
	<p style="color:blue" style="font-size:5px">+237 695 297 170</p>
	<p style="color:blue " style="font-size:5px">+237 677 440 131</p>
</div>
</div>

	<div class="col-sm-8"> 
					<div class="slideshow-container">

					<div class="mySlides">
					  <div class="numbertext">Bamenda</div>
					  <img src="bootstrap/kdd/1.jpg" style="width:100%">
					  <div class="text"><b style="color:blue">sales</b></div>
					</div>

					<div class="mySlides">
					  <div class="numbertext">Chips & its functions</div>
					  <img src="bootstrap/kdd/2.jpg" style="width:100%">
					  <div class="text"><b style="color:blue">Teachig</b></div>
					</div>


					<div class="mySlides">
					  <div class="numbertext">1</div>
					  <img src="bootstrap/kdd/7.jpeg" style="width:100%">
					  <div class="text"><b style="color:blue">Repair & Maintenance</b></div>
					</div>

					<div class="mySlides">
					  <div class="numbertext">Teaching</div>
					  <img src="bootstrap/kdd/9.jpg" style="width:100%">
					  <div class="text"><b style="color:blue">Repair going on</b></div>
					</div>

					<div class="mySlides">
					  <div class="numbertext">2</div>
					  <img src="bootstrap/kdd/3.jpg" style="width:100%">
					  <div class="text"><b style="color:blue">Repair & Maintenance</b></div>
					</div>
                      

			
					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					  <span class="dot"></span> 
					   <span class="dot"></span> 
					</div>

					<script>
					var slideIndex = 0;
					showSlides();

					function showSlides() {
					    var i;
					    var slides = document.getElementsByClassName("mySlides");
					    var dots = document.getElementsByClassName("dot");
					    for (i = 0; i < slides.length; i++) {
					       slides[i].style.display = "none";  
					    }
					    slideIndex++;
					    if (slideIndex > slides.length) {slideIndex = 1}    
					    for (i = 0; i < dots.length; i++) {
					        dots[i].className = dots[i].className.replace(" active", "");
					    }
					    slides[slideIndex-1].style.display = "block";  
					    dots[slideIndex-1].className += " active";
					    setTimeout(showSlides, 10000); // Change image every 10 seconds
					}
					</script>
					
</div>

<dav class="col-sm-2">
	<div class="news">
<h4  style="color:blue">Recent news | post</h4>
<p>A new conpany has been openned in Equatorial Guinea,Bata City, to facilitate  a safer training, sales of goods electronic products and teaching about web disign,repair, maintenance, Inglish langueage, apps software, typing and so on.</p>
<p>Nvog Ekog welcome everybody interested to learn computer and other activities that we carry along. Come and fine out yourself what we are able to do, do not wait for someone to tell you, your place is kept only for you...</p>
</div>
			
</div>
</div>
</div>
<!--Request section begins from here-->
<div class="container-fluid">
	<div class="request row">

	<div class="col-sm-4">
		<div class="request1">
  	    <h1><b style="color:orange">Request</b>a<br>Quote</h1>
  	</div>
  	</div>

  	<div class="col-sm-3">
	        <form action="backup.php" method="POST">
						<label for="fname"></label>
						<input type="text" id="fname" name="name" placeholder="Name*" required="">

						<label for="lname"></label>
						<input type="email" id="lname" name="email" placeholder="E-mail" required="">

						<label for="gender"></label>
						<input type="gender" id="gender" placeholder="Gender*" required="">
						<br><br>

						 <input type="submit">
						 <input type="reset">
		   
	</div>

    <div class="col-sm-3">
            
            
			            <label for="fname"></label>
			            <input type="number" id="pnumber" name="pnumber" placeholder="Phone Number*" required="">

			            <label for="lname"></label>
			            <input type="Date" id="DoB" name="DoB" placeholder="Date of Birth">

			            <label for="Services"></label>
					    <select id="Services" name="Services">
					    <option value="Web Design">Web Design</option>
					    <option value="Web Hosting">Web Hosting</option>
					    <option value="Networkig">Networkig</option>
					    <option value="Repair & Maintenance">Repair & Maintenance</option>
					    </select>
			</form> 
			
    </div>
    <div class="col-sm-2">
    	
    </div>
  


</div>
</div>


<div class="container-fluid">
	<div class=" footer row">

		<div class="col-sm-4">
			
				<img src="bootstrap/kdd/z5.jpg" width="150px" height="150px">       
					<p><b>Nvog Ekoga is an Equatorial-Guinean company-base Information Technology Company that offers services in custom software Development, Internet Marketing, IT contsulting...</b></p>
					<p><b>Nvog Ekoga offers first-class services intended to meet customer's unique needs.</b></p>

		</div>

		<div class="col-sm-4">
		    <div class="bien">
					<h2 style="color:white">Recent news</h2>
					<hr>
					<p><b>Nvog Ekoga  Welcomes Interns from the National University of EG</b></p>
					<p><i class="fa fa-clock" style="color:#D8A355"></i> julio/01/2019</p>
					<p><b>Nvog Ekoga  CEO at the launch/Community Challenge 'Hack Day' of the Facebook Developers Circle Bata</b></p>
					<p><i class="fa fa-clock" style="color:#D8A355"></i> julio/01/2019</p>
           </div>
		</div>

		<div class="col-sm-4">
			<div class="chica">
							<h2 style="color:white">Extra Links</h2>
							<hr>
				<div class="muda">
					<div class="mum">
							<a href="#">About us</a>
							<br>
							<a href="#">Become a Partner</a>
							<br>
							<a href="#">services</a>
							<br>
							<a href="#">Our Team</a>
					    </div>
					<div class="baby">
							<a href="#">Appointment</a>
							<br>
							<a href="#">Request a Quote</a>
							<br>
							<a href="#">Careers</a>
							<br>
							<a href="#">contact us</a>
					    </div>
                </div>
		    </div>

	    </div>

</div>
</div>

<div class="container-fluid">
<div class=" footers row">
 <hr>
	<div class="col-sm-4">
  <div class="copyright" style="font-size:15px">Copyright &copy 2019 Nvog Ekoga.Ltd.All rights reserved</div>
 
</div>
<div class="col-sm-5"></div>

  	<div class="col-sm-3">
  	<a href="#"><i class="fab fa-facebook-f"></i></a>
	<a href="#"><i class="fab fa-twitter"></i></a>
	<a href="#"><i class="fab fa-instagram"></i></a>
	<a href="#"><i class="fab fa-google-plus"></i></a>
	<a href="#"><i class="fab fa-linkedin"></i></a>
  	<a href="https://api.whatsapp.com/send?phone=+237695297170"><i class="fab fa-whatsapp"></i></a>
  </div>

</div>
</div>


</body>
</html>