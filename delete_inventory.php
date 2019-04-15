<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$inventory_id = $_GET['inventory_id'];
		$sql= "DELETE FROM inventory WHERE inventory_id='$inventory_id'";
		if($inventory_id!= "" && mysql_query($sql))
{       mysql_query("ALTER TABLE inventory AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_inventory.php'>";
	  }
	  else
		//die("Failed".mysql_error());
	{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_inventory.php'>";
	  }
	}
		
	
?>