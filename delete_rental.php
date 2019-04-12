<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$rental_id = $_GET['rental_id'];
		$sql= "DELETE FROM rental WHERE rental_id='$rental_id'";
		if($rental_id!="" && mysql_query($sql))
{
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_rental.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_rental.php'>";
	  }
	}
		
	
?>