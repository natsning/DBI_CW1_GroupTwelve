<?php 
include_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $rental_date= $_POST['rental_date'];
        $inventory_id = $_POST['inventory_id'];
        $customer_id= $_POST['customer_id'];
        $return_date = $_POST['return_date'];
        $staff_id= $_POST['staff_id'];
        
	  if($rental_date!="" && $return_date!="" && mysql_query("INSERT INTO rental VALUES(NULL,'$rental_date','$inventory_id','$customer_id','$return_date','$staff_id',CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_rental.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_rental.php'>";
		}
}
 
?>