<!DOCTYPE html>
<html>
<head>

<style>
table,th,td{
border:1px solid black;
}
</style>
</head>
<body>
<center>
<h1>FB member List</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db_s";

$conn = mysqli_connect($servername, $username, $password,$dbname);


if (!$conn) 
{
  echo"connection failed<br>";
}
else
{
  echo "Connected<br>";
}

$sql="SELECT * FROM tb_a";
$result=$conn->query($sql);
if($result->num_rows>0)
{
   echo
      "<table><tr><th>Id</th>
        <th>Name</th>
         
           </tr>";
while($row=$result->fetch_assoc())
{
  
    echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";
}
echo"</table>";
}
else
{
echo"0 results";
}
$conn->close();

?>
<br><br><br><br><br><br><br>
</center>
</body>
