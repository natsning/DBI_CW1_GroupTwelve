<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$store_id = $_GET['store_id'];
		$sql= "DELETE FROM store WHERE store_id='$store_id'";
		if($store_id!="" && mysql_query($sql))
{
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_store.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_store.php'>";
	  }
	}
		
?>