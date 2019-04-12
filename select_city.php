<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>     
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>

    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <table> 
    <h1>City</h1>
    </br>

      <tr>
          <th>City_ID</th>
          <th>City</th>
          <th>Country_ID</th>
          <th>Last_Update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM city";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->city_id; ?></td>
            <td><?php echo $row->city; ?></td>
            <td><?php echo $row->country_id; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_city.php" method="POST">
    <b>Insert city: <br/></b>
    City:       <input type="text" name="city"/><br /><br/>
    Country ID: <input type="text" name="country_id"/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_city.php" method="POST">
    <b>Update city: <br/></b>
    City ID:    <input type="text" name="city_id"/><br /><br>
    City:       <input type="text" name="city"/><br /><br>
    Country ID: <input type="text" name="country_id"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_city.php" method="GET">
    <b>Delete city: <br/></b>
    City ID:  <input type="text" name="city_id"/><br />
    <input type="submit" name="delete" value=" delete "/>
    </form>
    </hr>
    
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop >  20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
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