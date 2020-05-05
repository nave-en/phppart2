<html>
<head>
	<title>
		updating details
	</title>
	<style>
		h1{
			background-color: green;
		}
		body{
			background-color: black;
		}
		label,p{
			color:yellow;
		}
		input[type="tel"]:hover{
			border-color: red;
	background-color: ghostwhite;
		}
		input[type="tel"]:focus{
	background-color: white;
	color:solid black;
        }
        input[type="tel"]{
	        background-color: grey;
	        height:5%;
	        width:40%;
            }
		input[type="text"]:hover{
	border-color: red;
	background-color: ghostwhite;
}
		input[type="text"]:focus{
	background-color: white;
	color:solid black;
        }
		input[type="text"]{
	        background-color: grey;
	        height:5%;
	        width:40%;
            }
		form
		{
			margin-top: 50px;
			margin-left: 500px;
		}	
		#two{
			margin-left: 10px;
		}		
#one,#two{
	margin-top: 20px;
	height:30px;
	width:200px;
	background-color: yellow;
	border-radius: 12px;
}
#one:hover,#two:hover
{
	background-color: orange;
	color:red;
}
	</style>
</head>
<body>
	<h1>
		update details
	</h1>
	<form action="update.php" method="POST">
		<p>phone number:</p><input type="tel" name="phone" minlength="10" maxlength="10"placeholder="phonenumber" required><br>
		<p><b>select the field for updating the details</b></p>
		<input type="checkbox"name="fir">
		<label for="firstname">firstname</label><br>
		<input type="text" name="first" placeholder="firstname"><br>
		<input type="checkbox" name="las">
		<label for="lastname">lastname</label><br>
		<input type="text" name="last" placeholder="firstname"><br>
		<input type="checkbox" name="add">
		<label for="lastname">address</label><br>
		<input type="text" name="address" placeholder="address"><br>
		<input type="submit" value="SUBMIT" id="one" name="qwerty"><input id="two" onClick="window.location.href='contanct.php'"type="submit" value="HOME">
	</form>
</body>
<?php
if(isset($_POST["qwerty"])){
$servername = "localhost";
$username = "naveen";
$password = "12348765";
$db="test";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$first=$last=$add=$sql=" ";
$phone=0000000000;
$i=2;
if(isset($_POST['phone']))
{
$phone=$_POST['phone'];
}
$sql="SELECT first from contanct where phone='$phone'";
$res=$conn->query($sql);
if($res->num_rows>0){
if(isset($_POST['fir']))
{
	$first=$_POST["first"];
	if($first!=null)
	$sql="UPDATE contanct SET first='$first' where phone=$phone";
	$conn->query($sql);
	$i=1;
}
if(isset($_POST['las']))
{
	$last=$_POST["last"];
	if($last!=null)
	$sql="UPDATE contanct SET last='$last' where phone=$phone";
	$conn->query($sql);$i=1;
}
if(isset($_POST['add']))
{
	$add=$_POST["address"];
	if($add!=null)
	$sql="UPDATE contanct SET address='$add' where phone=$phone";
	$conn->query($sql);
	$i=1;
}
echo"<script>alert('details updated successfully')</script>";
}
else
{
	echo"<script>alert('Number not found')</script>";
}
$conn->close();
}
?>
</html>
