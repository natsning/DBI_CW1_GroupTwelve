<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$actor_id = $_POST['actor_id'];
		$film_id = $_POST['film_id'];
		$prevactor_id = $_POST['prevactor_id'];
		$prevfilm_id = $_POST['prevfilm_id'];
		$sql     = "UPDATE film_actor SET actor_id='$actor_id',film_id='$film_id',
		last_update=CURRENT_TIMESTAMP WHERE actor_id=$prevactor_id AND film_id='$prevfilm_id'";
		if(mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film_actor.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film_actor.php'>";
	  }
	}
?>