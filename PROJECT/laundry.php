<?php
error_reporting(0);
 	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
    if(!$connect)  die("Error"); //else echo "connected";
		$sql = 
    "INSERT INTO laundry.laundry1 (unitname,password1,date1) 
	VALUES ('".$_REQUEST['UNIT']."','".$_REQUEST['Password']."','".$_REQUEST['DATE']."')";
    $result = mysqli_query($connect, $sql); 

    if($result)
        echo "DAY and Time INSERTED";
    else
        echo "DAY and TIME  NOT INSERTED";
?>
