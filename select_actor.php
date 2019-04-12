<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>   
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>
    <a href="#insert"><button id ="editBtn">Edit</button></br></a>
    
    <?php include('db.php');  ?>
    
    <h1>Actor</h1>
    <table>

      <tr>
          <th>Actor_ID</th>
          <th>First_name</th>
          <th>Last_name</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM actor";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->actor_id; ?></td>
            <td><?php echo $row->first_name; ?></td>
            <td><?php echo $row->last_name; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
        <form action="insert_actor.php" method="POST">
        <b>Insert actor: </b></br>
        First Name: <input type="text" name="first_name"/><br /></br>
        Last Name: <input type="text" name="last_name"/><br />
        <input type="submit" name="insert" value=" Insert "/>
    </form>
    
    <form action="update_actor.php" method="POST">
        <b>Update actor: </b></br>
        Actor ID: <input type="text" name="actor_id"/><br /></br>
        First Name: <input type="text" name="first_name"/><br /></br>
        Last Name: <input type="text" name="last_name"/><br />
        <input type="submit" name="update" value=" Update "/>
    </form>
    
    <form action="delete_actor.php" method="GET">
        <b>Delete actor:</b></br>
        Actor ID: <input type="text" name="actor_id" /></br>
        <input type="submit" name="delete" value=" Delete "/>
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