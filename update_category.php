<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$category_id = $_POST['category_id'];
		$name  = $_POST['name'];
		$sql     = "UPDATE category SET name='$name',last_update=CURRENT_TIMESTAMP
		WHERE category_id='$category_id'";
		if($name!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_category.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_category.php'>";
	  }
	}
?>
