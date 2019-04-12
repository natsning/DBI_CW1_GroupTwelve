<?php 
require_once 'db.php';

	if(isset($_POST['insert']))
	{
	    $title = $_POST['title'];
	    $description= $_POST['description'];
	    $release_year= $_POST['release_year'];
	    $language_id= $_POST['language_id'];
	    $original_language_id= $_POST['original_language_id'];
	    $rental_duration= $_POST['rental_duration'];
	    $rental_rate= $_POST['rental_rate'];
	    $length= $_POST['length'];
	    $replacement_cost= $_POST['replacement_cost'];
	    $rating= $_POST['rating'];
	    $special_features= $_POST['special_features'];
	    $category_id = $_POST['category_id'];
	    if($original_language_id==''){
	  $query = "INSERT INTO film VALUES(NULL,'$title','$description','$release_year','$language_id',NULL,'$rental_duration','$rental_rate','$length','$replacement_cost','$rating','$special_features',CURRENT_TIMESTAMP,'$category_id')";
	    }
	    else{
	        $query = "INSERT INTO film VALUES(NULL,'$title','$description','$release_year','$language_id','$original_language_id','$rental_duration','$rental_rate','$length','$replacement_cost','$rating','$special_features',CURRENT_TIMESTAMP,'$category_id')";
	    }
	  if($title!="" && mysql_query($query)){
		echo '<script>alert("Insertion successful");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film.php'>";
	  }
	  else
		{//die("Failed".mysql_error());
		echo '<script>alert("Insertion Failed");</script>';
	    echo "<meta http-equiv='refresh' content='0;url=select_film.php'>";
		}
	}
 
?>