<?php
	include_once('db.php');
 
	if( isset($_GET['delete']) )
	{
		$payment_id = $_GET['payment_id'];
		$sql= "DELETE FROM payment WHERE payment_id='$payment_id'";
		if($payment_id!="" && mysql_query($sql))
{
		echo '<script>alert("Deleted");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_payment.php'>";
	  }
	  else
		//die("Failed".mysql_error());
		{
		echo '<script>alert("Deletion Failure");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_payment.php'>";
	  }
	}
		
?>