<html>
    <body>
        
    <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>
    
    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Rental</h1>
    <table>
            </br>

      <tr>
          <th>Rental_ID</th>
          <th>Rental_date</th>
          <th>Inventory_ID</th>
          <th>Customer_ID</th>
          <th>Return_date</th>
          <th>Staff_ID</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM rental";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->rental_id; ?></td>
            <td><?php echo $row->rental_date; ?></td>
            <td><?php echo $row->inventory_id; ?></td>
            <td><?php echo $row->customer_id; ?></td>
            <td><?php echo $row->return_date; ?></td>
            <td><?php echo $row->staff_id; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_rental.php" method="POST">
    <b>Insert rental: <br/></b>
    Rental Date: <input type="text" name="rental_date" placeholder="YYYY-MM-DD HH:MM:SS"/><br /><br />
    Inventory ID: <input type="text" name="inventory_id" placeholder=""/><br /><br />
    Customer ID: <input type="text" name="customer_id" /><br /><br />
    Return Date: <input type="text" name="return_date" placeholder="YYYY-MM-DD HH:MM:SS"/><br /><br />
    Staff ID: <input type="text" name="staff_id" placeholder=""/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_rental.php" method="POST">
    <b>Update rental: <br/></b>
    Rental ID: <input type="text" name="rental_id"/><br /><br />
    Rental Date: <input type="text" name="rental_date"/><br /><br />
    Inventory ID: <input type="text" name="inventory_id"/><br /><br />
    Customer ID: <input type="text" name="customer_id"/><br /><br />
    Return Date: <input type="text" name="return_date"/><br /><br />
    Staff ID: <input type="text" name="staff_id"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_rental.php" method="GET">
    <b>Delete rental: <br/></b>
    Rental ID: <input type="text" name="rental_id"/><br />
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