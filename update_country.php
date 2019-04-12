<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$country_id = $_POST['country_id'];
		$country  = $_POST['country'];
		$sql     = "UPDATE country SET country='$country',
		last_update=CURRENT_TIMESTAMP WHERE country_id='$country_id'";
		if($country!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_country.php'>";
	  }
	  else
		  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_country.php'>";
	  }
	}
?>