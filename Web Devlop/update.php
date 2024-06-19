<?php
if(isset ($_POST['Old_Password']))
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

$pass= $_POST['Old_Password'];
$npass= $_POST['New_Password'];
$cpass= $_POST['Conform_Password'];

if($npass==$cpass)
{
    echo "hi";

    $sql="UPDATE registration_page SET Password ='$cpass'  WHERE Password='$pass'";
    if (mysqli_query($connection,$sql))
     {
        echo "Record updated successfully";
}
}
?>
