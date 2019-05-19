<?php
$dbname = 'id9561485_roommateadvweb';
$dbuser = 'id9561485_6931';
$dbpass = 'ait1234@!';
$dbhost = 'localhost';

$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
else{
$FirstName = $_POST["fname"];
$LastName = $_POST["lname"];
$Email = $_POST["email"];
$Password = password_hash($_POST["pswd"],PASSWORD_DEFAULT);
$query = "INSERT INTO user (firstName,lastName,email,password) VALUES ('".$FirstName."','".$LastName."','".$Email."','".$Password."')";
echo $query;
$result = mysqli_query($conn, $query);
if(!$result){
echo "<p>Something is worng with", $query, "</p>";
}
else{
echo "<p>Successfully added new recordAAAAA</p>";
}
}
mysqli_close($conn);
header('Location:index.php');exit();
?>