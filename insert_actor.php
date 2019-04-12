
<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	  $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
 
	  if($first_name!="" && mysql_query("INSERT INTO actor VALUES(NULL,'$first_name','$last_name',CURRENT_TIMESTAMP)"))
{
		echo '<script>alert("Insertion successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_actor.php'>";
	  }
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_actor.php'>";
		}
	}
 
	
?>

