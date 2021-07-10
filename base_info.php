
<?php
$connection = new mysqli("localhost","root","","base_control");
	 $stmt= $connection->prepare("select * from robot_base");
	$stmt->execute();
	
	 $result = $stmt->get_result();
	
	while($row = $result ->fetch_assoc()){
	
	        
	echo $row["direction"];
}
?>