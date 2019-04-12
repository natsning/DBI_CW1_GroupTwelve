<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $store_id = $_POST['store_id'];
	    $first_name = $_POST['first_name'];
	    $last_name = $_POST['last_name'];
	    $email = $_POST['email'];
	    $address_id = $_POST['address_id'];
	    $active = $_POST['active'];
 
	  if($store_id!=""&& $first_name!="" && $address_id!="" && $active!="" && mysql_query("INSERT INTO customer VALUES(NULL,'$store_id','$first_name','$last_name','$email','$address_id','$active',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_customer.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_customer.php'>";
		}
}
 
?>