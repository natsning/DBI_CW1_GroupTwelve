<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$inventory_id = $_POST['inventory_id'];
		$film_id  = $_POST['film_id'];
		$store_id = $_POST['store_id'];
		$sql     = "UPDATE inventory SET film_id='$film_id',store_id='$store_id',
		last_update=CURRENT_TIMESTAMP WHERE inventory_id='$inventory_id'";
		if(mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_inventory.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_inventory.php'>";
	  }
	}
?>
