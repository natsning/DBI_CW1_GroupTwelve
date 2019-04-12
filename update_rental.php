<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$rental_id = $_POST['rental_id'];
		$rental_date  = $_POST['rental_date'];
		$inventory_id = $_POST['inventory_id'];
		$customer_id  = $_POST['customer_id'];
		$return_date = $_POST['return_date'];
		$staff_id = $_POST['staff_id'];
		$sql     = "UPDATE rental SET rental_date='$rental_date',inventory_id='$inventory_id',
		customer_id='$customer_id',return_date='$return_date',staff_id='$staff_id',
		last_update=CURRENT_TIMESTAMP WHERE rental_id='$rental_id'";
		if($rental_date!="" && $return_date!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_rental.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_rental.php'>";
	  }	}
?>