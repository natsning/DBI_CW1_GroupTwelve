<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$customer_id = $_GET['customer_id'];
		$sql= "DELETE FROM customer WHERE customer_id='$customer_id'";
		if(mysql_query($sql))
{       mysql_query("ALTER TABLE customer AUTO_INCREMENT=1");
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_customer.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_customer.php'>";
	  }
	}
		
?>