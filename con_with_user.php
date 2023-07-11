<?php
    include 'db_conn.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql="INSERT INTO `user` (`id`, `name`, `number`, `email`, `pc_number`, `room_number`, `department`,`description`, `date`)
        SELECT `id`, `name`, `number`, `email`, `pc_number`, `room_number`, `department`,`description` ,`date` FROM `registration`
        WHERE `id` = $id;";
        $sqll="DELETE FROM `registration` WHERE id=$id";

        $result = mysqli_query($conn,$sql);
        $resultt = mysqli_query($conn,$sqll);

        if($result && $resultt){

            header('location:admin.php');
  }
  else{
    echo 'somthing gone wrong  ';
  }
}
?>

