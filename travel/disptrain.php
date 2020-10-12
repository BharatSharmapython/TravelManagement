<html>
      <main role="main" class="inner cover">
    <body background="images/train4.jpg" class="text-center">
      <link href="css/bootstrap.min.css" rel="stylesheet">  
      <h1 class="text-center display-1">KNOW TRAIN DETAILS</h1><BR><BR>

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

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM train_details ";
$result = $link->query($sql);
echo "<center>";
echo "<table border=4 width=1000 height=400>";
echo "<tr> <th> TRAIN ID</th> <th> TRAIN NAME</th><th> SOURCE</th><th> DESTINATION</th><th> CLASS</th><th> DATE </th><th> DEPARTURE</th><th>ARRIVAL</th><th>DURATION</th><th>PRICE(inRS)</th>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <font size=+3 color=blue> <tr style='font-weight:bold'> <td> " . $row["train_id"]."</td>" ." <td> " . $row["train_name"]. "</td>" ." <td> " . $row["source"]."</td>" ."<td>" . $row["destination"]."</td>"." <td>" . $row["class"]."</td>"."<td>". $row["date"]."</td>"."<td>". $row["departure"]."</td>"."<td>". $row["arrival"]."</td>"."<td>". $row["duration"]."</td>"."<td>". $row["price"]."</td>";
           }
           echo '<a href="train.html" class="btn btn-outline-danger">BOOK NOW</a>';
        } 


// Close connection
mysqli_close($link);
?>


</html>