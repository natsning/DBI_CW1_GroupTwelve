<?php 
require_once 'db.php';
if( isset($_POST['update']) )
	{
		$film_id = $_POST['film_id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$release_year  = $_POST['release_year'];
		$language_id = $_POST['language_id'];
		$original_language_id = $_POST['original_language_id'];
		$rental_duration = $_POST['rental_duration'];
		$rental_rate = $_POST['rental_rate'];
		$length = $_POST['length'];
		$replacement_cost = $_POST['replacement_cost'];
		$rating = $_POST['rating'];
		$special_features = $_POST['special_features'];
		$category_id = $_POST['category_id'];
		
		if($original_language_id==''){
		    $sql= "UPDATE film SET title='$title',description='$description',
		release_year='$release_year',language_id='$language_id',
		original_language_id=NULL,rental_duration='$rental_duration',
		rental_rate='$rental_rate',length='$length',
		replacement_cost='$replacement_cost',rating='$rating',special_features='$special_features',
		last_update=CURRENT_TIMESTAMP,category_id='$category_id' WHERE film_id='$film_id'";
		}
		else{
		$sql= "UPDATE film SET title='$title',description='$description',
		release_year='$release_year',language_id='$language_id',
		original_language_id=$original_language_id,rental_duration='$rental_duration',
		rental_rate='$rental_rate',length='$length',
		replacement_cost='$replacement_cost',rating='$rating',special_features='$special_features',
		last_update=CURRENT_TIMESTAMP,category_id='$category_id' WHERE film_id='$film_id'";
		}
		if($title!="" && mysql_query($sql))
        {
		echo '<script>alert("Upadate successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film.php'>";
	  }
	  else
	  {
		//die("Could Not Update. ".mysql_error());
	    echo '<script>alert("Update Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film.php'>";
	  }
	}
?>