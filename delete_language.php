<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$language_id = $_GET['language_id'];
		$sql= "DELETE FROM language WHERE language_id='$language_id'";
		if($language_id!="" && mysql_query($sql))
{       mysql_query("ALTER TABLE language AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_language.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_language.php'>";
	  }
	}
		
	
?>