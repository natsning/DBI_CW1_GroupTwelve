<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$city_id = $_POST['city_id'];
		$city  = $_POST['city'];
		$country_id = $_POST['country_id'];
		$sql     = "UPDATE city SET city='$city',country_id='$country_id',
		last_update=CURRENT_TIMESTAMP WHERE city_id='$city_id'";
		if($city!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_city.php'>";
	  }
	  else
		 {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_city.php'>";
	  }
	}
?>