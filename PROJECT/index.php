<?php


$sql="select * from laundry.laundry1 where unitname ='".$UNIT."'";
	$result=mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)>0){
		echo "<br>"."You have Already Selected A Date for laundry!"."<br><br>" ;
		$sql="select TimeSlot from laundry.laundry1 where unitname ='".$UNIT."'";
		while($row=mysqli_fetch_assoc($result)){
			echo $row["TimeSlot"];
		}
		echo "<br><br>"."You will be send to the Home page in 5 second";
		$connect->close();
		include "Homepage.html";
	}
	
?>