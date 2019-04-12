<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>

    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Language</h1>
    <table>
                </br>

      <tr>
          <th>Language_ID</th>
          <th>Name</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM language";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->language_id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_language.php" method="POST">
    <b>Insert languge : <br/></b>
    Name: <input type="text" name="name" placeholder=""/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_language.php" method="POST">
    <b>Update language: <br/></b>
    Language ID: <input type="text" name="language_id"/><br /><br />
    Name: <input type="text" name="name"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_language.php" method="GET">
    <b>Delete language: <br/></b>
    Language ID: <input type="text" name="language_id"/><br />
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