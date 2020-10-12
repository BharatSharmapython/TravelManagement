<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = new mysqli("localhost", "root", "", "bharat");
$id = $_GET["t1"];
$payment = $_GET["t2"];




// Check connection
if($link-> connect_error)
{
    die("ERROR: Could not connect.");
}
 
// Attempt insert query execution
$sql = "INSERT INTO planepayment (book_id , payment) VALUES
            ('$id','$payment')";

if($link-> query($sql) == TRUE)
{
    
    header('Refresh: 2; URL=success.html', true, 301);
	
} 
else
{
    header('Refresh: 2; URL=fail.html', true, 301);
}

// Close connection
?> 

