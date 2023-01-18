<?php 

// check connected withdata base and print message
// $con =mysqli_connect('localhost','root','','mystore');
// if($con){
// echo "connected";
// }else{
// die(mysqli_error($con));
// }

// check connected withdata base and print message

$con =mysqli_connect('localhost','root','','mystore');
if(!$con){
    die(mysqli_error($con));
}
?>