<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $actor_id = $_POST['actor_id'];
	    $film_id = $_POST['film_id'];
 
	  if(mysql_query("INSERT INTO film_actor VALUES('$actor_id','$film_id',CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_film_actor.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film_actor.php'>";
		}

		
	}
 
?>