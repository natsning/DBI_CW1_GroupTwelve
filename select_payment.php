<html>
    <body>
        
     <link rel="stylesheet" href="stylesheet.css">
     
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
    <button onclick="home()" id="homeBtn" title="Go to homepage">Home</button>

    <?php include('db.php');  ?>
    <a href="#insert"><button id ="editBtn">Edit</button></a>
    <h1>Payment</h1>
    <table>
                </br>

      <tr>
          <th>Payment_ID</th>
          <th>Customer_ID</th>
          <th>Staff_ID</th>
          <th>Rental_ID</th>
          <th>Amount</th>
          <th>Payment_date</th>
          <th>Last_update</th>
      </tr>
      
    <?php
    $sql="SELECT * FROM payment";
    $query=mysql_query($sql);
    
    if(mysql_num_rows($query)>0)
        {
            while($row=mysql_fetch_object($query))
            {
             
    
    ?>  
    
        <tr>
            <td><?php echo $row->payment_id; ?></td>
            <td><?php echo $row->customer_id; ?></td>
            <td><?php echo $row->staff_id; ?></td>
            <td><?php echo $row->rental_id; ?></td>
            <td><?php echo $row->amount; ?></td>
            <td><?php echo $row->payment_date; ?></td>
            <td><?php echo $row->last_update; ?></td>
        </tr>
        
    <?php
    
        }
    }
        
        ?>
        
    </table>
    <hr id="insert">
    <form action="insert_payment.php" method="POST">
    <b>Insert payment: <br/></b>
    Customer ID: <input type="text" name="customer_id" placeholder=""/><br /><br />
    Staff ID: <input type="text" name="staff_id" placeholder=""/><br /><br />
    Rental ID: <input type="text" name="rental_id" /><br /><br />
    Amount: <input type="text" name="amount" placeholder="decimal"/><br />
    <input type="submit" name="insert" value=" insert"/>
    </form>
    
    <form action="update_payment.php" method="POST">
    <b>Update payment: <br/></b>
    Payment ID: <input type="text" name="payment_id"/><br /><br />
    Customer ID: <input type="text" name="customer_id"/><br /><br />
    Staff ID: <input type="text" name="staff_id"/><br /><br />
    Rental ID: <input type="text" name="rental_id"/><br /><br />
    Amount: <input type="text" name="amount"/><br /><br />
    Payment Date: <input type="text" name="payment_date"/><br />
    <input type="submit" name="update" value=" update "/>
    </form>
    
    <form action="delete_payment.php" method="GET">
       <b>Delete payment: <br/></b>
    Payment ID: <input type="text" name="payment_id"/><br />
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