<html>
<head>
	</head>
	<body>
<?php

$host="localhost";
$dusername="root";
$dpassword="";
$dbname="login_id";

$username=$_POST["runame"];
$password=$_POST["rpass"];
$confirmpassword=$_POST["rcpass"];
if($password===$confirmpassword)
{
	$conn= new mysqli($host,$dusername,$dpassword,$dbname);
	if($conn->connect_error)
	{
		echo "connection error:". $conn->connect_error;
	}
	

	$sql= "INSERT INTO logindata(username,password)
	VALUES ('$username','$password')";
	if($conn->query($sql)==true)
	{
		echo "register succesfully";
	}
	else
	{
		echo "insert fail:".$conn->error;
	}

}
else
{
	echo "<h1>"."REGISTRETION FAILED"."</br>";
}



?>
<br>
<a href="indexpage.php"><button>LOGIN</button></a>


</body>
</html>