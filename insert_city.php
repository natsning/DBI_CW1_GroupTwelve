<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $city = $_POST['city'];
	    $country_id = $_POST['country_id'];
 
	  if($city!="" && mysql_query("INSERT INTO city VALUES(NULL,'$city','$country_id',CURRENT_TIMESTAMP)") )
{
		echo '<script>alert("Insertion successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_city.php'>";
	  }
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_city.php'>";
		}
	}
 
?>