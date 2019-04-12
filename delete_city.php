<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$city_id = $_GET['city_id'];
		$sql= "DELETE FROM city WHERE city_id='$city_id'";
		if($city_id!="" && mysql_query($sql))
{
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_city.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_city.php'>";
	  }
	}
		
	
?>