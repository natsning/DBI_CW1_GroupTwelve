<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href = "stylesheet.css" rel="stylesheet">
</head>
<body>
<ul class="cb-slideshow">
            <li><span>img 1</span></li>
            <li><span>img 2</span></li>
            <li><span>img 3</span></li>
            <li><span>img 4</span></li>
            <li><span>img 5</span></li>
            <li><span>img 6</span></li>
</ul>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  		<a href="select_actor.php">Actor</a>
		<a href="select_address.php">Address</a>
		<a href="select_category.php">Category</a>
		<a href="select_city.php">City</a>
		<a href="select_country.php">Country</a>
		<a href="select_customer.php">Customer</a>
		<a href="select_film.php">Film</a>
		<a href="select_film_actor.php">Film Actor</a>
		<a href="select_inventory.php">Inventory</a>
		<a href="select_language.php">Language</a>
		<a href="select_payment.php">Payment</a>
		<a href="select_rental.php">Rental</a>
		<a href="select_staff.php">Staff</a>
		<a href="select_store.php">Store</a>
</div>

<div id="main">
  <button class="openbtn" class="btn btn-pill btn-dark" onclick="openNav()">☰ Select Table</button> 
</div>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html>
<!--<html>-->


<!--<head>-->
<!--<meta charset="utf-8">-->
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--<link rel="stylesheet" href="stylesheet.css">-->
<!--</head>-->

<!--<body>-->
<!--	<div id="header">-->
<!--		<div id="heading1">S A K I L A</div>-->
<!--	</div>-->
	
	
<!--	<div id="sidebar">-->
		<!--<a href="select_actor.php">Actor</a>-->
		<!--<a href="select_address.php">Address</a>-->
		<!--<a href="select_category.php">Category</a>-->
		<!--<a href="select_city.php">City</a>-->
		<!--<a href="select_country.php">Country</a>-->
		<!--<a href="select_customer.php">Customer</a>-->
		<!--<a href="select_film.php">Film</a>-->
		<!--<a href="select_film_actor.php">Film Actor</a>-->
		<!--<a href="select_inventory.php">Inventory</a>-->
		<!--<a href="select_language.php">Language</a>-->
		<!--<a href="select_payment.php">Payment</a>-->
		<!--<a href="select_rental.php">Rental</a>-->
		<!--<a href="select_staff.php">Staff</a>-->
		<!--<a href="select_store.php">Store</a>-->
		
<!--	</div>-->
	 

	<!--<div class="content">-->
		<!--<div id="cf">-->
  <!--          <img src="mov1.jpg" />-->
  <!--          <img src="mov2.jpg" />-->
  <!--          <img src="mov3.jpg" />-->
  <!--          <img src="mov4.jpg" />-->
  <!--          <img src="mov5.jpg" />-->
  <!--          <img src="mov6.jpg" />-->
  <!--          <img src="mov7.jpg" />-->
  <!--          <img src="mov8.jpg" />-->
  <!--      </div>-->
	<!--</div>-->

<!--<script>-->
<!--function open() {-->
<!--  document.getElementById("sidebar").style.display = "block";-->
<!--}-->
 
<!--function close() {-->
<!--  document.getElementById("sidebar").style.display = "none";-->
<!--}-->
<!--</script>-->
    

<!--</body>-->

<!--</html>-->