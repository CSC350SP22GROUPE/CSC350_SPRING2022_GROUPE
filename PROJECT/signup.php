<?php
error_reporting(0);
    $servername="localhost";
    $username="root";
    $password= "root";
    $connect=mysqli_connect($servername,$username,$password);
    if(!$connect)  die("Error"); //else echo "connected";
   $sql =
    "INSERT INTO aptlaundry.clients (AptNumber,UserName,Userpassword,UserEmail)VALUES('".$_REQUEST['ApartNumber']."','".$_REQUEST['username']."','".$_REQUEST['Password']."','".$_REQUEST['EmailAddress']."')";
    $result = mysqli_query($connect, $sql); // Send the query to the database

    if($result)
        echo "Account Sign Up Sucessfully";
    else
        echo "Account Invalid";
	
?>