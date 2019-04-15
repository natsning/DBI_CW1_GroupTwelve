<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$film_id = $_GET['film_id'];
		$sql= "DELETE FROM film WHERE film_id='$film_id'";
		if($film_id!="" && mysql_query($sql))
{       mysql_query("ALTER TABLE film AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film.php'>";
	  }
	}
		
?>