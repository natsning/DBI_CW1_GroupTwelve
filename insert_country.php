<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $country = $_POST['country'];
 
	  if($country!="" && mysql_query("INSERT INTO country VALUES(NULL,'$country',CURRENT_TIMESTAMP)"))
{
		echo '<script>alert("Insertion successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_country.php'>";
	  }
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_country.php'>";
		}
	}
 
?>