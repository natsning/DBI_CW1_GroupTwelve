<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$staff_id = $_GET['staff_id'];
		$sql= "DELETE FROM staff WHERE staff_id='$staff_id'";
		if(	$staff_id!="" && mysql_query($sql))
{
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_staff.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_staff.php'>";
	  }
	}
		
	
?>