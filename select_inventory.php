<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>
    
    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Inventory</h1>
    <table>
                </br>

      <tr>
          <th>Inventory_ID</th>
          <th>Film_ID</th>
          <th>Store_ID</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM inventory";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->inventory_id; ?></td>
            <td><?php echo $row->film_id; ?></td>
            <td><?php echo $row->store_id; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_inventory.php" method="POST">
    <b>Insert inventory: <br/></b>
    Film ID: <input type="text" name="film_id" placeholder=""/><br /><br />
    Store ID: <input type="text" name="store_id" placeholder=""/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_inventory.php" method="POST">
    <b>Update inventory: <br/></b>
    Inventory ID: <input type="text" name="inventory_id"/><br /><br />
    Film ID: <input type="text" name="film_id"/><br /><br />
    Store ID: <input type="text" name="store_id"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_inventory.php" method="GET">
    <b>Delete inventory: <br/></b>
    Inventory ID: <input type="text" name="inventory_id"/><br />
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