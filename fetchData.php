<?php
    include "config.php";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
    if(isset($_POST['search'])){
    $search = $_POST['search'];
    $query = "SELECT * FROM `room` WHERE `address` like'%".$search."%'";
    $result = mysqli_query($conn,$query);
    $response = array();
    echo "<p>Something is worng with", $response, "</p>";
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("label"=>$row['address']);
    }
    echo json_encode($response);
    }
exit;
?>