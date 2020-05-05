<html>
<head><title>Delete contact</title>
<style>
  h1{
    background-color: green;
  }
  body{
    background-color: black;
  }
  label{
    color:yellow;
    margin-top: 40px;
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

#one,#two{
  height:30px;
  width:200px;
  background-color: yellow;
  border-radius: 12px;
  margin-top: 20px;
}
#one:hover,#two:hover
{
  background-color: orange;
  color:red;
}
</style></head>
<body>
  <h1>Delete contact</h1>
	<form method="POST" action="dcontanct.php">
    <label>
		Enter the phone number for deleting the contanct:</label><br><input type="tel" name="phone" minlength="10" maxlength="10"placeholder="phonenumber" required><br>
		<input type="submit" id="one"name="qwerty">
    <input id="two" onClick="window.location.href='contanct.php'"type="submit" value="HOME">
	</form>
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
$phone=$_POST['phone'];
$sql="DELETE from contanct where phone='$phone'";
if ($conn->query($sql) === true)
{
    echo "<script>alert('Deleted successfully')</script>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
</body>
</html>