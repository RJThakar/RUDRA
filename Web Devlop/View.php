<?php
if(isset ($_POST['Mobile']))
{
    echo "Hello";
}
$server =  "localhost";
$username =  "root";
$password = "";
$connection = mysqli_connect( $server, $username, $password,"test");
             
if(! $connection)
{
    die(mysqli_connect_error());
}
echo "Connected";
$Mob= $_POST['Mobile'];
echo $sql="SELECT * FROM registration_page WHERE Mobile= '$Mob' ";
$query = mysqli_query($connection,$sql);

if($query)
{
    echo "Record Found!<br>";

}

$row = mysqli_fetch_array($query);
if($row>0)
{
echo "<Table>";
echo "<tr>";
echo "<td>";
echo $row['Name']; 
echo $row['Mobile']; 
echo $row['Password']; 
echo $row['DOB']; 

}
?>