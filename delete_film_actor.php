<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$actor_id = $_GET['actor_id'];
		$film_id = $_GET['film_id'];
		$sql= "DELETE FROM film_actor WHERE actor_id='$actor_id' AND film_id='$film_id'";
		if($actor_id!="" && $film_id!="" && mysql_query($sql))
{       mysql_query("ALTER TABLE film_actor AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film_actor.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film_actor.php'>";
	  }
		
	}
	
?>