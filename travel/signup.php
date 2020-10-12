  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = new mysqli("localhost", "root", "", "bharat");
$id = $_GET["t1"];
$fname = $_GET["t2"];
$lname= $_GET["t3"];
$address = $_GET["t4"];
$phone = $_GET["t5"];
$age = $_GET["t6"];
$email = $_GET["t7"];
$pwd = $_GET["t"];




// Check connection
if($link-> connect_error)
{
    die("ERROR: Could not connect.");
}
 
// Attempt insert query execution
$sql = "INSERT INTO customer (cid , first_name , last_name , address , phone , age , email ,pwd) VALUES
            ('$id','$fname', '$lname' , '$address' , '$phone' , '$age' , '$email', '$pwd' )";

if($link-> query($sql) == TRUE)
{
    
  header('Refresh: 2; URL=confirm.html', true, 301);
	
} 
else
{
  header('Refresh: 2; URL=fail.html', true, 301);
}

// Close connection
?> 

