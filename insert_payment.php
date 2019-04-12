<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $customer_id= $_POST['customer_id'];
	    $staff_id= $_POST['staff_id'];
	    $rental_id= $_POST['rental_id'];
	    $amount= $_POST['amount'];
 
	  if(mysql_query("INSERT INTO payment VALUES(NULL,'$customer_id','$staff_id','$rental_id','$amount',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_payment.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_payment.php'>";
		}
}
 
?>