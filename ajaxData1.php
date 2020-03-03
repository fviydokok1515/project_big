<?php 
// Include the database config file 
$con= mysqli_connect("localhost","root","","minipro1");
if(!empty($_POST["country_id"])){ 
// Fetch state data based on the specific country 
$query = "SELECT * FROM user WHERE code = ".$_POST['country_id']." "; 
$result = mysqli_query($con, $query); 
// Generate HTML of state options list 
if($result->num_rows > 0){ 
echo '<option value="">Select </option>'; 
while($row = $result->fetch_assoc()){  
echo '<option value="'.$row['Id_card'].'">'.$row['name'].' '.$row['lastname'].'</option>'; 
} 
}else{ 
echo '<option value="">ไม่พบผู้ดูแล</option>'; 
} 
}











// elseif(!empty($_POST["state_id"])){ 
// // Fetch city data based on the specific state 
// $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
// $result = mysqli_query($con, $query); 
// // Generate HTML of city options list 
// if($result->num_rows > 0){ 
// echo '<option value="">Select city</option>'; 
// while($row = $result->fetch_assoc()){  
// echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
// } 
// }else{ 
// echo '<option value="">City not available</option>'; 
// } 
// } 
?>