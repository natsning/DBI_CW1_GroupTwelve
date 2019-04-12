<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>

    <?php include('db.php');  ?>
    
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Country</h1>
    <table>
                </br>

      <tr>
          <th>Country_ID</th>
          <th>Country</th>
          <th>Last_Update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM country";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->country_id; ?></td>
            <td><?php echo $row->country; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_country.php" method="POST">
    <b>Insert country: <br/></b>
    Country: <input type="text" name="country"/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_country.php" method="POST">
    <b>Update country: <br/></b>
    Country ID: <input type="text" name="country_id"/><br /><br />
    Country: <input type="text" name="country"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_country.php" method="GET">
    <b>Delete country: <br/></b>
    Country ID: </b><input type="text" name="country_id"/><br />
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