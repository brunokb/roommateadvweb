<?php
$dbname = 'id9561485_roommateadvweb';
$dbuser = 'id9561485_6931';
$dbpass = 'ait1234@!';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

if($link->connect_error){
	die("Connection failed: ".$link->connect_error);
}else{
$FirstName = $_POST["fname"];
$LastName = $_POST["lname"];
$Email = $_POST["email"];
$Password = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
$query = "INSERT INTO register (fname,lname,email,pwd) VALUES ('".$FirstName."','".$LastName."','".$Email."','".$Password."')";
echo $query;
$result = mysql_query($link, $query);

if(!$result){
echo "<p>Something is worng with", $query, "</p>"
}
else{
echo "<p>Successfully added new record</p>"
}
}
mysql_close($link);
?>