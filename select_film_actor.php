<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>

    <?php include('db.php');  ?>
    
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Film Actor</h1>
    <table>
                </br>

      <tr>
          <th>Actor_ID</th>
          <th>Film_ID</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM film_actor";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->actor_id; ?></td>
            <td><?php echo $row->film_id; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_film_actor.php" method="POST">
    <b>Insert film actor: <br/></b>
    Actor ID:<input type="text" name="actor_id"/><br /><br />
    Film ID:<input type="text" name="film_id"/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_film_actor.php" method="POST">
    <b>Update film actor: <br/></b>
    Previous Actor ID: <input type="text" name="prevactor_id"/><br /><br />
    Previous Film ID: <input type="text" name="prevfilm_id"/><br /><br />
    Actor ID: <input type="text" name="actor_id"/><br /><br />
    Film ID: <input type="text" name="film_id"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_film_actor.php" method="GET">
    <b>Delete film actor: <br/></b>
    Actor ID: <input type="text" name="actor_id"/><br /><br />
    Film ID: <input type="text" name="film_id"/><br />
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