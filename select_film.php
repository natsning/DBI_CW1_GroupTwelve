<html>
    <body>
    <?php include('db.php');  ?>
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>     
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>

    
    
   <a href="#insert"><button id ="editBtn">Edit</button></a>
   <h1>Film</h1>
    <table>
                </br>

      <tr>
          <th>Film_ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Release_Year</th>
          <th>Language_ID</th>
          <th>Original_Language_ID</th>
          <th>Rental_Duration</th>
          <th>Rental_Rate</th>
          <th>Length</th>
          <th>Replacement_Cost</th>
          <th>Rating</th>
          <th>Special_Features</th>
          <th>Last_Update</th>
          <th>Category_ID</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM film";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->film_id; ?></td>
            <td><?php echo $row->title; ?></td>
            <td><?php echo $row->description; ?></td>
            <td><?php echo $row->release_year; ?></td>
            <td><?php echo $row->language_id; ?></td>
            <td><?php echo $row->original_language_id; ?></td>
            <td><?php echo $row->rental_duration; ?></td>
            <td><?php echo $row->rental_rate; ?></td>
            <td><?php echo $row->length; ?></td>
            <td><?php echo $row->replacement_cost; ?></td>
            <td><?php echo $row->rating; ?></td>
            <td><?php echo $row->special_features; ?></td>
            <td><?php echo $row->last_update; ?></td>
            <td><?php echo $row->category_id; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    
    <hr id="insert">
    <form action="insert_film.php" method="POST">
    <b>Insert film: <br/></b>
    Title: <input type="text" name="title" /><br /><br />
    Desccription: </br>
    <textarea rows="4" cols="50" name="description" placeholder="description"/></textarea><br /><br />
    Release Year: <input type="text" name="release_year" placeholder="YYYY" /><br /><br />
    Language ID:  <select name="language_id"> 
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
		    	</select><br /><br />
    Original Language ID: <input type="text" name="original_language_id" /><br /><br />
    Rental Duration: <input type="text" name="rental_duration" /><br /><br />
    Rental Rate: <input type="text" name="rental_rate" p/><br /><br />
    Length: <input type="text" name="length" /><br /><br />
    Replacement Cost: <input type="text" name="replacement_cost" /><br /><br />
    Rating: <input type="text" name="rating" /><br /><br />
    Special Features: <input type="text" name="special_features" /><br /><br />
    Category ID: <input type="text" name="category_id" /> <br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_film.php" method="POST">
    <b>Update film: <br/></b>
    Film ID: <input type="text" name="film_id"/><br /><br />
    Title: <input type="text" name="title"/><br /><br />
    Desccription: </br>
    <textarea rows="4" cols="50" name="description" placeholder="description"/></textarea><br /><br />
    Release Year: <input type="text" name="release_year"placeholder="YYYY"/><br /><br />
    Language ID: <select name="language_id"> 
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			    </select><br /><br />
    Original Language ID: <input type="text" name="original_language_id"/><br /><br />
    Rental Duration: <input type="text" name="rental_duration"/><br /><br />
    Rental Rate: <input type="text" name="rental_rate"/><br /><br />
    Length: <input type="text" name="length"/><br /><br />
    Replacement Cost: <input type="text" name="replacement_cost"/><br /><br />
    Rating: <input type="text" name="rating"/><br /><br />
    Special Features: <input type="text" name="special_features"/><br /><br />
    Category ID: <input type="text" name="category_id" /> <br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_film.php" method="GET">
    <b>Delete film: <br/></b>
    Film ID: <input type="text" name="film_id"/><br />
    <input type="submit" name="delete" value=" delete "/>
    </form>
    </hr>
    
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop >  20) {
            document.getElementById("myBtn").style.display = "block";
        } 
        else 
            document.getElementById("myBtn").style.display = "none";
        
        }
    

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    
    function home()
    {
    window.location = 'http://hfyyt4.mercury.nottingham.edu.my/';   
    }
    </script>
    </body>
</html>