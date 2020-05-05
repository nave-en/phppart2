<html>
<head><title>New contanct</title>
<style>
	html, body {
  height: 100%;
  margin: 0;
  background-color: black;
}
p{
	color:yellow;
	font-size: 20px;
}
input:hover{
	border-color: red;
	background-color: ghostwhite;
}
input{
	background-color: grey;
	height:5%;
	width:40%;
}
input:focus{
	background-color: white;
	color:solid black;
}
#hello
{
	margin-top: 50px;
	margin-left: 350px;
}
	
#one,#two{
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
h1{
	background-color: green;
}
}
</style>
</head>
<body>
	<h1>Fill up the details</h1>
	<div id="hello">
	<form method="POST" action="new.php">
		<p>First name:</p><input type="text" name="first"placeholder="first name" required><br>
		<p>Last name:</p><input type="text" name="last"placeholder="last name" required><br>
		<p>phone number:</p><input type="tel" name="phone" minlength="10" maxlength="10"placeholder="phonenumber"  required><br>
		<p>address:</p><input type="text" maxlength="40" name="address" placeholder="address" required><br><br>
		<div id="ho"><input id="one"type="submit" name="qwerty" value="SUBMIT">
		<input id="two" onClick="window.location.href='contanct.php'"type="submit" value="HOME"></div>
	</form>
</div>
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
$fname=$_POST["first"];
$lname=$_POST["last"];
$phon=$_POST["phone"];
$add=$_POST["address"];
if(is_numeric($phon)){
$sql="INSERT INTO contanct values('$fname','$lname','$phon','$add')";
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("new record created successfully")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
	echo"<script>alert('enter correct number')</script>";
}
$conn->close();
}
?>
</body>
</html>