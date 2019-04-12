<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     <a href="#insert"><button id ="editBtn">Edit</button></br></a>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
     <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>
    <?php include('db.php');  ?>
    <h1>Address</h1>
    <table>

      <tr>
          <th>Address_ID</th>
          <th>Address</th>
          <th>Address2</th>
          <th>District</th>
          <th>City_ID</th>
          <th>Postal_Code</th>
          <th>Phone</th>
          <th>Last_Update</th>
      </tr>
  
    <?php
    $sql="SELECT * FROM address";
    $query=mysql_query($sql);

    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
         

    ?>  

    <tr>
        <td><?php echo $row->address_id; ?></td>
        <td><?php echo $row->address; ?></td>
        <td><?php echo $row->address2; ?></td>
        <td><?php echo $row->district; ?></td>
        <td><?php echo $row->city_id; ?></td>
        <td><?php echo $row->postal_code; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->last_update; ?></td>
    </tr>
    
    <?php

    }
}
    
    ?>
    
</table>
<hr id="insert">
<form action="insert_address.php" method="POST">
<b>Insert address: <br/></b>
Address: <input type="text" name="address"/><br /><br />
Address2:<input type="text" name="address2"/><br /><br />
District: <input type="text" name="district"/><br /><br />
City ID: <input type="text" name="city_id"/><br /><br />
Postal Code: <input type="text" name="postal_code"/><br /><br />
Phone: <input type="text" name="phone"/><br /><br />
<input type="submit" name="insert" value=" insert"/>
</form>

<form action="update_address.php" method="POST">
<b>Update address: <br/></b>
Address ID: <input type="text" name="address_id"/><br /><br />
Address: <input type="text" name="address"/><br /><br />
Address2:<input type="text" name="address2"/><br /><br />
District: <input type="text" name="district"/><br /><br />
City ID: <input type="text" name="city_id"/><br /><br />
Postal Code: <input type="text" name="postal_code"/><br /><br />
Phone: <input type="text" name="phone"/><br /><br />
<input type="submit" name="update" value=" update "/>
</form>

<form action="delete_address.php" method="GET">
<b>Delete address:</b> <br/>
Address ID: <input type="text" name="address_id"/><br />
<input type="submit" name="delete" value=" delete "/>
</form>

</hr>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
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