<?php 
$servername= "localhost";
$username= "root";
$password="";
$db_name="my_db";

//sql connection 
$connectdb = mysqli_connect($servername ,$username ,$password ,$db_name);

if(!$connectdb){
    echo "ConnectionFailed";
    exit();
}




?>


