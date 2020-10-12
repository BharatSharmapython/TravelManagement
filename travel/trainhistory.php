<html>
      <main role="main" class="inner cover">
    <body background="images/train4.jpg" class="text-center">
      <link href="css/bootstrap.min.css" rel="stylesheet">  
      <h1 class="text-center display-1">KNOW TRAIN BOOKING DETAILS</h1><BR><BR>

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
$sql = "SELECT * FROM book_train where c_id = $id";
$result = $link->query($sql);
echo "<center>";
echo "<table border=4 width=1000 height=100>";
echo "<tr> <th> CUSTOMER ID</th> <th> TRAIN ID</th><th> BOOKING ID</th>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <font size=+3 color=blue> <tr style='font-weight:bold'> <td> " . $row["c_id"]."</td>" ." <td> " . $row["t_id"]. "</td>" ." <td> " . $row["book_id"]."</td>";
           }
           echo '<a href="trainhistory.html" class="btn btn-warning">BACK</a>';
        } 

// Close connection
mysqli_close($link);
?>


</html>