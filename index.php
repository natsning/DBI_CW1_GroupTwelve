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

    <div id="title">
  <p>S</p>
  <p>A</p>
  <p>K</p>
  <p>I</p>
  <p>L</p>
  <p>A</p>
</div>


<script>

function openNav() {
  document.getElementById("mySidebar").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html>