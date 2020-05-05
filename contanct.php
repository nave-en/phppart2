<html>
<head><title>Contance details</title>
	<style>
		
html, body {
  height: 100%;
  margin: 0;
  background-color: black;
}
button
{

	height:100px;
	width:500px;
	background-color: yellow;
	color:solid black;
	font-size:30px;
	border-radius: 12px;
	margin-top: 20px;
}
button:hover
{
	background-color: orange;
	color: red;
}

#hello {
  height: 100%;
  margin-top: 0px;
  margin-left: 400px;
}	</style>
</head>
<body>
	<script>
		function myfunction()
		{
			location.replace("new.php");
		}
		function myfunction1()
		{
		location.replace("update.php")
		}
		function myfunction2()
		{
				location.replace("dcontanct.php");
		}
		function myfunction3()
		{
				location.replace("view.php");
		}
		function myfunction4()
		{
			location.replace("download.php");
		}
	</script>
	<div id="hello">
	<button id="create" onclick="myfunction()">Create contanct</button><br>
	<button id="update" onclick="myfunction1()">update contanct</button><br>
	<button id="delete" onclick="myfunction2()">delete contanct</button><br>
	<button id="view" onclick="myfunction3()">view storage contanct</button><br>
	<button id="download" onclick="myfunction4()">download</button><br>
</div>
</body>
</html>