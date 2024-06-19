<?php
if(isset ($_POST['fname']))
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
$Name=$_POST['fname'];
$Mobile=$_POST['mobile'];
$DOB=$_POST['DOB'];
$Password=$_POST['password'];
 $sql = "INSERT INTO registration_page (Name,Mobile,DOB,Password) VALUES ('$Name','$Mobile','$DOB','$Password')";
 $query=mysqli_query($connection, $sql);
 if($query) 
 {
    echo "Data Inserted";
 }
 else
 {
    echo "Locho";
 }
?> 