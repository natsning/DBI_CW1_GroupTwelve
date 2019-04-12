<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$actor_id = $_POST['actor_id'];
		$first_name  = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$sql     = "UPDATE actor SET first_name='$first_name',last_name='$last_name' WHERE actor_id='$actor_id'";
		if($first_name!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_actor.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_actor.php'>";
	  }
	 }
?>
