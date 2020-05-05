<html>
	<head>
		<title>login</title>
	</head>
<?php
	$w=$user=$pw=$u=$p=" ";
	$list=array("naveen"=>"123456","kumar"=>"654321");
	if(isset($_POST["uname"]))
		$user=$_POST["uname"];
	if(isset($_POST["pwd"]))
		$pw=$_POST["pwd"];
foreach($list as $x=>$x_value)
{
	if($user==$x)
	{
      if($x_value == $pw)
      {
      	$p=1;$u=1;
      }
      else
      {
      	$p=0;$u=1;
      }
	}
}
if($u==0)
{
	echo "username not found";
}
else if($p==0)
{
	echo "incorrect password";
}
else
{
	echo "welcome\t". $user;
}
?>
	<body>
	<form action="login.php" method="POST">
		<p>enter ur username</p><input type="text" name="uname" placeholder="username" required><br>
		<p>enter ur password</p><input type="password" name="pwd" placeholder="password" required><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>