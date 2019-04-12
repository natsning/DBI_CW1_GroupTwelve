<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $manager_staff_id= $_POST['manager_staff_id'];
	    $address_id= $_POST['address_id'];
 
	  if($manager_staff_id!="" && mysql_query("INSERT INTO store VALUES(NULL,'$manager_staff_id','$address_id',CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_store.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_store.php'>";
		}
}
 
?>