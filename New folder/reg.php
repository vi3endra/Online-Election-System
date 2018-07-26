<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
die("connection failed:".mysqli_connect_error());
}
{
//echo "connected";
}
//echo "<br>";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$address=$_POST["address"];
$voterid=$_POST["voterid"];
$aadhar=$_POST["aadhar"];
$dateofbirth=$_POST["dob"];
$mobileno=$_POST["mobileno"];
$email=$_POST["email"];
$password=$_POST["psw"];
$pswrepete=$_POST["cnfmpassword"];

mysqli_select_db($conn,'electiondb');
$sql="INSERT INTO registration(firstname,lastname,address,voterid,aadhar,dob,mobileno,email,password,cnfmpassword)VALUES
('$firstname','$lastname','$address','$voterid','$aadhar','$dateofbirth','$mobileno','$email','$password','$pswrepete')";
if(mysqli_multi_query($conn,$sql))
{
//echo "record added";
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<body>
	
</body>
</html>