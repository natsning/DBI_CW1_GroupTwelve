<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $film_id= $_POST['film_id'];
	    $store_id= $_POST['store_id'];
 
	  if(mysql_query("INSERT INTO inventory VALUES(NULL,'$film_id','$store_id',CURRENT_TIMESTAMP)"))
	{
		echo '<script>alert("Insertion successful");</script>';
		echo "<meta http-equiv='refresh' content='0;url=select_inventory.php'>";}
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_inventory.php'>";
		}
}
?>