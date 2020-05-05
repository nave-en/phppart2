<html>
<head>
	<title>downloading</title>
</head>
<body>
	<p><a href="contanct_details.csv" download>click here to download the file</a></p>
	<p><a href="contanct.php"/>click here to go back home</a></p>
</body>
</html>
<?php
$servername = "localhost";
$username = "naveen";
$password = "12348765";
$db="test";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * from contanct";
$res=$conn->query($sql);
$file="contanct_details.csv";
$f=fopen($file,"w+");
$result=array();
$result[]=array("first_name","last_name","phone_no","address");
while ($row = $res->fetch_array()) {  
            $first=$row['first']; 
            $last=$row['last']; 
            $phone=$row['phone'];
            $address=$row['address'];
            $result[]=array($first,$last,$phone,$address); 
        } 
foreach ($result as $w) {
  fputcsv($f, $w);
}

fclose($f);
$conn->close();
?>
</html>