<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $address = $_POST['address'];
	    $address2 = $_POST['address2'];
        $district = $_POST['district'];
        $city_id = $_POST['city_id'];
        $postal_code = $_POST['postal_code'];
        $phone = $_POST['phone'];
 
	  if($address!="" && $district!="" &&$city_id!="" && mysql_query("INSERT INTO address VALUES(NULL,'$address','$address2','$district','$city_id','$postal_code','$phone',CURRENT_TIMESTAMP)"))
{
		echo '<script>alert("Insertion successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_address.php'>";
	  }
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_address.php'>";
		}
	}
 
 
?>

