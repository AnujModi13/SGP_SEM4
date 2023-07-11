<?php
session_start();
$conn = mysqli_connect("localhost","root","","sgp_project");

    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $pc_number = $_POST['pc_number'];
    $room_number = $_POST['room_number'];
    $department = $_POST['department'];
    $description = $_POST['description'];
    $date = date('y-m-d',strtotime($_POST['date']));
    $query ="insert into registration(name,number,email,pc_number,room_number,department,description,date) values('$name','$number','$email','$pc_number','$room_number','$department','$description','$date')";
    $query_run = mysqli_query($conn,$query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location:doneregistration.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location:home.php");
    }


?>




$connection_link = new mysqli("localhost", "root", "","geeks_database"); 
  
if ($connection_link === false) { 
    die("ERROR: Not connected. ".$connection_link->connect_error); 
} 
  
//sql query to perform copying data from one table to another
$sql_query  =  "insert table2 select * from table1"; 
    if ($connection_link->query($sql_query) === true) 
{ 
    echo "Data Copied Successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to proceed $sql_query. "
        .$connection_link->error; 
} 
  
// Close the  connection 
$connection_link->close(); 
?> 