<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>     
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>
   
    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Store</h1>
    <table>
                </br>

      <tr>
          <th>Store ID</th>
          <th>Manager Staff ID</th>
          <th>Address ID</th>
          <th>Last Update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM store";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->store_id; ?></td>
            <td><?php echo $row->manager_staff_id; ?></td>
            <td><?php echo $row->address_id; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_store.php" method="POST">
    <b>Insert store: <br/></b>
    Manager Staff ID: <input type="text" name="manager_staff_id" /><br /><br />
    Address ID: <input type="text" name="address_id" /><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_store.php" method="POST">
    <b>Update store: <br/></b>
    Store ID: <input type="text" name="store_id"/><br /><br />
    Manger Staff ID: <input type="text" name="manager_staff_id"/><br /><br />
    Address ID: <input type="text" name="address_id"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_store.php" method="GET">
    <b>Delete store: <br/></b>
    Store ID: <input type="text" name="store_id"/><br />
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