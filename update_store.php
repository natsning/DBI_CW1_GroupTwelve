<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$store_id = $_POST['store_id'];
		$manager_staff_id = $_POST['manager_staff_id'];
		$address_id       = $_POST['address_id'];
		$sql              = "UPDATE store SET manager_staff_id='$manager_staff_id',address_id='$address_id',
		last_update=CURRENT_TIMESTAMP WHERE store_id='$store_id'";
		if($manager_staff_id!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_store.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_store.php'>";
	  }	}
?>