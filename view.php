<html>
<head><title>contact list</title>
<style>
    body{
        background-color: black;
    }
    h1
    {
        width:100%;
        background-color:green; 
    }
    table,th,td
    {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 15px 15px 15px 15px; 
        color:yellow;
        border-color: pink;
    }
    #two{
    height:30px;
    width:200px;
    background-color: yellow;
    margin-top: 10px;
    float:left;
    border-radius: 12px;
}
#two:hover
{
    background-color: orange;
    color:red;
}
</style></head>
<body>
    <h1>
        your contact list
    </h1>
    <?php
$servername = "localhost";
$username = "naveen";
$password = "12348765";
$db="test";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM contanct";
$res=$conn->query($sql);
     if ($res->num_rows> 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Firstname</th>"; 
        echo "<th>Lastname</th>"; 
        echo "<th>phonenumber</th>";
        echo "<th>address</th"; 
        echo "</tr>"; 
        while ($row = $res->fetch_array()) { 
            echo "<tr>"; 
            echo "<td>".$row['first']."</td>"; 
            echo "<td>".$row['last']."</td>"; 
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
    <input id="two" onClick="window.location.href='contanct.php'"type="submit" value="HOME">
    </body>
</html>