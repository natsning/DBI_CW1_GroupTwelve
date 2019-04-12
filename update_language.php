<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$language_id = $_POST['language_id'];
		$name  = $_POST['name'];
		$sql     = "UPDATE language SET name='$name',
		last_update=CURRENT_TIMESTAMP WHERE language_id='$language_id'";
		if($name!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_language.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_language.php'>";
	  }	}
?>
