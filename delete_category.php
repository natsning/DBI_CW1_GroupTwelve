<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$category_id = $_GET['category_id'];
		$sql= "DELETE FROM category WHERE category_id='$category_id'";
			if($category_id!="" && mysql_query($sql))
{       mysql_query("ALTER TABLE category AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_category.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_category.php'>";
	  }
	}
		
?>