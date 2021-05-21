<?php 

// connect to local database
//$conn = mysqli_connect('localhost', 'bala', '', 'bala_pizza');

// connect to the remote database
$conn = mysqli_connect('remotemysql.com', '4s6AsZ86VX', 'AqqQfne5vv', '4s6AsZ86VX');

//check connection
if(!$conn){
    echo 'DB connection error: ' . mysqli_connect_error();
}

?>