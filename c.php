<?php
$servername= "localhost";
$username="root";
$password="";
$dbname="db_s";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{ 
echo"connection Failed";
}
else
{
echo"connected";
}
$sql ="INSERT INTO tb_a (id,name)VALUES('$_POST[id]','$_POST[name]')";

if(mysqli_query($conn,$sql))
{
echo" new record successfully";
}
mysqli_close($conn);

?>