<?php 

    session_start();
    include 'dbtest.php';
    
    
    $link= OpenCon();
    
    echo "Database Connected Successfully </br>" ;

        $_SESSION['username']= $_POST['uname'];
        $password=$_POST['psw'];

    $query= "SELECT * FROM userInfo WHERE username='".$_SESSION['username']."' AND password='".$password."' limit 1";

    $result= mysqli_query($link,$query) or die(mysql_error());
    $row= mysqli_num_rows($result);

    if($row==1){
        header('location:homeLoggedIn.php');
        exit();
    } else {
        echo "Incorrect password or username";
        exit();
    }
    CloseCon($link);
?>