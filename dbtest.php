<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
function OpenCon()
{
    $dbname = 'userInfo';
    $dbuser = 'root';
    $dbpass = '';
    $dbhost = 'localhost';
    
    $link = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die("Unable to Connect to '$dbhost'");
    
    return $link;
}

function CloseCon($link){
    $link -> close();
}

?>