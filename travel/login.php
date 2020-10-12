<?php
$email = $_POST["t1"];
$password = $_POST["t2"];
$conn = new mysqli("localhost", "root", "", "bharat");
if($conn-> connect_error)
{
   die("Connection failed");
}
$sql= "SELECT * FROM customer WHERE pwd = '$password' AND email = '$email' ";
$a="SELECT * FROM customer WHERE pwd = '$password' AND email = '$email'";
$result = $conn-> query($sql);
$result1 = $conn-> query($a);
$check = mysqli_fetch_array($result);
$check1= mysqli_fetch_array($result1);
if(isset($check))
{
    header('Refresh: 2; URL=cover1.html', true, 301);;
}

   elseif($check1!=$a)
{

    header('Refresh: 2; URL=fail2.html', true, 301);
}

?>