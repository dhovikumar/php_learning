<html> 
<head> 
	</head>
	<body>
<?php
     $host="localhost";
     $dusername="root";
     $dpassword="";
     $dbname="login_id";

     $lusername=$_POST["uname"];
     $lpassword=$_POST["pass"];

     $conn= new mysqli($host,$dusername,$dpassword,$dbname);
     if($conn->connect_error)
     {
     	echo "db connection error: ".$conn->connect_error;
     }
    

        $sql= "SELECT username,password FROM logindata WHERE username='$lusername' && password='$lpassword'";


        $result=$conn->query($sql);


        if($result->num_rows > 0)
        {
        	echo "<h1>"."login success"."</h1>";
        }
        else
        {
        	echo "login failed";

        }





?>
<br>
        	<a href="registerpage.php"><button>REGISTER</button></a>

</body>
</html>
