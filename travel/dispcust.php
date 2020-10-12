<html>
      <main role="main" class="inner cover">
    <body background ="images/cust1.jpg" class="text-center">
      <link href="css/bootstrap.min.css" rel="stylesheet">  
      <h1 class="text-center display-1">KNOW YOUR DETAILS</h1><BR><BR>
 <form name="v" method="get" action="dispcust.php">
 <div align="center"> <font size="+3" color="#3300CC"> CUSTOMER ID </font> <input type="number" name="t1" required>
    <br><BR>
    <button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
    <button type="reset " class="btn btn-primary btn-lg">RESET</button><br><br>
   </div>
</form>
    </main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  </body>

  
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bharat");
$id = $_GET["t1"];

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM customer where cid = $id ";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <font size=+3 > FIRST NAME: " . $row["first_name"]. " <br>LAST NAME : " . $row["last_name"]. " <br>ADDRESS :" . $row["address"]. " <br>PHONE :" . $row["phone"]. " <br>    AGE :" . $row["age"]."<br> EMAIL :".$row["email"]."<br>" ;
    }
} else {
    echo "<font size=+3>YOUR RECORD DOESN'T EXIST</font><br>";
}
 
// Close connection
mysqli_close($link);
?>
<font size=+3>
 <a href="cover1.html" class="btn btn-outline-primary">Back To Cover</a>
</font>
</html>