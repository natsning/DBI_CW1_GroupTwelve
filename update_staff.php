<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$staff_id = $_POST['staff_id'];
		$first_name  = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$address_id  = $_POST['address_id'];
		$email = $_POST['email'];
		$store_id = $_POST['store_id'];
		$active  = $_POST['active'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql     = "UPDATE staff SET first_name='$first_name',last_name='$last_name',
		address_id='$address_id',email='$email',store_id='$store_id',active='$active',username='$username',password='$password',
		last_update=CURRENT_TIMESTAMP WHERE staff_id='$staff_id'";
		if($first_name!="" && $active!="" && $username!="" && $password!="" && mysql_query($sql))
{
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_staff.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_staff.php'>";
	  }	}
?>