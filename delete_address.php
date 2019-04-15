<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$address_id = $_GET['address_id'];
		$sql= "DELETE FROM address WHERE address_id='$address_id'";
		if($address_id!="" && mysql_query($sql))
{       mysql_query("ALTER TABLE address AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_address.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_address.php'>";
	  }
	}
		
	
	
?>