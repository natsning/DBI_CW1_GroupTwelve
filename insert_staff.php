<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $first_name= $_POST['first_name'];
	    $last_name= $_POST['last_name'];
	    $address_id= $_POST['address_id'];
	    $email= $_POST['email'];
	    $store_id= $_POST['store_id'];
	    $active= $_POST['active'];
	    $username= $_POST['username'];
	    $password= $_POST['password'];
 
	  if($first_name!="" && $active!="" && $username!="" && $password!="" && mysql_query("INSERT INTO staff VALUES(NULL,'$first_name','$last_name','$address_id',
	  '$email','$store_id','$active','$username','$password',CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_staff.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_staff.php'>";
		}
}
 
?>