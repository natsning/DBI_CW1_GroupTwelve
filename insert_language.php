<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $name= $_POST['name'];
 
	  if($name!="" && mysql_query("INSERT INTO language VALUES(NULL,'$name',CURRENT_TIMESTAMP)"))
{
		echo '<script>alert("Insertion successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_language.php'>";
	  }
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_language.php'>";
		}
	}
 
?>