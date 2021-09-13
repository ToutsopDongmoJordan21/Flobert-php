<?php 

if(isset($_POST['button'])){
    $price_per_unit = $_POST['price_per_unit'];
    $date = $_POST['date'];
    $Quantity_sold = $_POST['Quantity_sold'];
    $product_id= $_POST['product_id'];
   
    $con = mysqli_connect('localhost', 'root', '', 'nvog_ekoga');
    //make a query
    mysqli_query($con, "INSERT INTO sales(price_per_unit, date, Quantity_sold, product_id,)VALUES('$price_per_unit', '$date', '$Quantity_sold', '$product_id')");
    if(mysqli_error($con)) die("Unsuccessful");
    else die('Done!');
  }

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
 <link rel="stylesheet" type="text/css" href="fontawesome-free-5.10.1-web/css/all.css">

</head>
<body>
  <?php include('header.php')?>
   <div class="pager1"> 
  <div class="container">         
    <ul class="pager" >
        <li class="previous"><a href="store.php">Previous</a></li>
        <li class="next"><a href="#">Next</a></li>
    </ul>
    </div>
    <style>
      table{
        margin-left: 350px;
      }
      table {
        width: 50%;

      }
      table td, tr, th {
        border: 1px solid black;
        background-color:#FFFFCC;
      }
      th,td{
        text-align: center;
      }
      th, tr, td:hover {background-color:#D5E8E4;}
      button{
        float:right;
        margin-right: 100px;
      }
      input[type=number]{
        background-color:#FFFFCC;
      }
     
    </style>
</div>
    
    
    <p id="demo">
      <table>
        <tr>
          <th>Name</th><th>Quantity</th><th>Price</th><th>Mark</th><th>Remove</th>
        </tr>
        <tbody id="products">
          
        </tbody>
        
      </table>
    </p>
  <button type="button" onclick="order()">Order Now</button>
    <script>
            
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
     var response = JSON.parse(this.responseText);
     var products = response.products;
    var text = "";
    console.log(response.products)
     for(var i=0; i < products.length; i++){
      console.log(products[i].id)
     	id = products[i].id;
      name = products[i].name;
      price = products[i].price;
      mark = products[i].mark;
      text += "<tr><td>"+name+"</td><td><input type='number' name='number' value='1' min='1'/></td><td>"+price+" FCFA</td><td>"+mark+"</td><td><button id='button' onclick=removeItem("+id+")><i class='fa fa-trash'></i></button></td></tr>";

      //document.getElementById('demo').append( "ID: "+id+"  "+"Product's name: "+name+" , "+"Price: "+price+"");
     }

    document.getElementById('products').innerHTML = text;
     console.log(JSON.parse(this.responseText))
    }
  }
  var cart = localStorage.getItem('cart');
  xhttp.open("GET", "ajax.php?ids="+localStorage.getItem('cart'), true);
  xhttp.send();
  //console.log(localStorage.getItem('cart'));

    </script>
    <script>
     function removeItem(id){

       for(var i=0; i < cart.length; i++){
        if(cart[i]==id){
          cart.splice(i,1);
          localStorage.setItem('cart', JSON.stringify(cart));
          console.log(cart)
        }
        
       }
       document.location.reload();

     }
    
    </script>
    <script>
  function order(){
    $('tbody tr').each(function(i){
     
    })
  }
</script>
    

    <script src="jquery-3.4.1.min.js"></script>
    <script src="app.js"></script>
   
	
</body>
</html>