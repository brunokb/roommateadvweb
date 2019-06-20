<?php
include 'config.php';

$Password = $_POST["pswd"];
$Email = $_POST["email"];

$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$query = "SELECT password,firstName,LastName FROM user WHERE email ='".$Email."' LIMIT 1";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	if(password_verify($Password, $row["password"])){
	echo '<h2>Welcome '.$row['firstName'].'</h2>';
	}
	else
	{
	echo 'Invalid password';
}
mysqli_close($conn);
}
?>