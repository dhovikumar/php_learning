<html>
<head>
    <style>
    
        table ,th , td{
            border: 1px solid red;
            border-collapse: collapse;
       }
      
    }
    </style>
</head>
<body>
    
<?php
$host="localhost";
$user="root";
$password="";
$dbname="vinoth";
$conn=new  mysqli($host,$user,$password,$dbname);

if( $conn->connect_error)
{
	die("connection error: ". $conn->connect_errror);
}


$sql="SELECT * FROM emp LIMIT 1,2 " ;
$result= $conn->query($sql);

if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row["id"]." ".$row["firstname"].$row["lastname"].$row['email'].$row["reg_date"]."<br>";
    }
    

}
else
{
    echo "0 record accour";
}


$conn->close();
?>
</body>
</html>