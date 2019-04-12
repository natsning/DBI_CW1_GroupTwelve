<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$address_id = $_POST['address_id'];
		$address  = $_POST['address'];
		$address2 = $_POST['address2'];
		$district  = $_POST['district'];
		$city_id = $_POST['city_id'];
		$postal_code = $_POST['postal_code'];
		$phone  = $_POST['phone'];
		$sql     = "UPDATE address SET address='$address',address2='$address2',
		district='$district',city_id='$city_id',postal_code='$postal_code',phone='$phone',
		last_update=CURRENT_TIMESTAMP WHERE address_id='$address_id'";
		if($address!="" && $district!="" && $city_id!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_address.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_adress.php'>";
	   }
	}
?>
