<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>     
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>
    
    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Staff</h1>
    <table>
                </br>

      <tr>
          <th>Staff_ID</th>
          <th>First_name</th>
          <th>Last_name</th>
          <th>Address_ID</th>
          <th>Email</th>
          <th>Store_id</th>
          <th>Active</th>
          <th>Username</th>
          <th>Password</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM staff";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
        
    ?>  
    
        <tr>
            <td><?php echo $row->staff_id; ?></td>
            <td><?php echo $row->first_name; ?></td>
            <td><?php echo $row->last_name; ?></td>
            <td><?php echo $row->address_id; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->store_id; ?></td>
            <td><?php echo $row->active; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->password; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_staff.php" method="POST">
    <b>Insert staff: <br/></b>
    First Name: <input type="text" name="first_name" placeholder=""/><br /><br />
    Last Name: <input type="text" name="last_name" placeholder=""/><br /><br />
    Address ID: <input type="text" name="address_id" /><br /><br />
    Email: <input type="email" name="email"/><br /><br />
    Store ID: <input type="text" name="store_id" placeholder=""/><br /><br />
    Active: <input type="text" name="active" placeholder=""/><br /><br />
    Username: <input type="text" name="username"/><br /><br />
    Password: <input type="text" name="password"/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_staff.php" method="POST">
    <b>Update staff: <br/></b>
    Staff ID: <input type="text" name="staff_id"/><br /><br />
    First Name: <input type="text" name="first_name"/><br /><br />
    Last Name: <input type="text" name="last_name"/><br /><br />
    Address ID: <input type="text" name="address_id"/><br /><br />
    Email: <input type="text" name="email"/><br /><br />
    Store ID: <input type="text" name="store_id"/><br /><br />
    Active: <input type="text" name="active"/><br /><br />
    Username: <input type="text" name="username"/><br /><br />
    Password: <input type="text" name="password"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_staff.php" method="GET">
   <b>Delete staff: <br/></b>
    Staff ID: <input type="text" name="staff_id"/><br />
    <input type="submit" name="delete" value="delete "/>
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