<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$payment_id = $_POST['payment_id'];
		$customer_id  = $_POST['customer_id'];
		$staff_id = $_POST['staff_id'];
		$rental_id  = $_POST['rental_id'];
		$amount = $_POST['amount'];
		$payment_date = $_POST['payment_date'];
		$sql     = "UPDATE payment SET customer_id='$customer_id',staff_id='$staff_id',
		rental_id='$rental_id',amount='$amount',payment_date='$payment_date',
		last_update=CURRENT_TIMESTAMP WHERE payment_id='$payment_id'";
		if(mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_payment.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_payment.php'>";
	  }	}
?>