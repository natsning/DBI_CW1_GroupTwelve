<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$customer_id = $_POST['customer_id'];
		$store_id  = $_POST['store_id'];
		$first_name = $_POST['first_name'];
		$last_name  = $_POST['last_name'];
		$email = $_POST['email'];
		$address_id = $_POST['address_id'];
		$active  = $_POST['active'];
		$create_date  = $_POST['create_date'];
		$sql     = "UPDATE customer SET store_id='$store_id',first_name='$first_name',
		last_name='$last_name',email='$email',address_id='$address_id',active='$active',
		create_date='$create_date',last_update=CURRENT_TIMESTAMP
		WHERE customer_id='$customer_id'";
		if($store_id!=""&& $first_name!="" && $address_id!="" && $active!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_customer.php'>";
	  }
	  else
		  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_customer.php'>";
	  }
	}
?>