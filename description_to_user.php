<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo 'successfull';    
}else{
    echo 'no connection';
}
mysqli_select_db($con, 'sgp_project');

$description = $_POST['description'];

$query = "insert into `user`(description) 
values('$name','$email','$password')";