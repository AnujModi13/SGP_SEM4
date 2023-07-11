
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
  <script src="https://kit.fontawesome.com/421e558d95.js" crossorigin="anonymous"></script>
  <!-- <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous"
  /> -->
</head>
<body>

<section>
  
	<div class="sidebar" style="background-color:#212529;">
		<h1 class="logo">Fix-It</h1>

		<ul class="nav">
			<!-- <li><a href="admin.php"><i class="fa fa-windows"></i> Classroom</a></li> -->
			<li class="active"><a href="#"><i class="fa fa-shopping-bag"></i>labroom</a></li>
			<!-- <li><a href="#"><i class="fa fa-pie-chart"></i> Statistic</a></li>
			<li><a href="#"><i class="fa fa-cube"></i> Product</a></li>
			<li><a href="#"><i class="fa fa-database"></i> Stock</a></li>
			<li><a href="#"><i class="fa fa-tag"></i> Offer</a></li> -->

		</ul>

			<ul class="social">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Google</a></li>
			</ul>
		

	</div>
  
<div class="main"> 
		
		<div class="head-section">
			<div class="col-6">
				<h2>Query</h2>
				<!-- <p>30 orders found</p> -->
			</div>

			<div class="col-6" style="text-align: right;">
				

				<img src="image/user.png" class="user">

				<div class="profile-div">
					<!-- <p><i class="fa fa-user"></i>   Profile</p> -->
					<!-- <p><i class="fa fa-cog"></i>   Settings</p> -->
					<p><a class = "newdiv" href="logout.php"><i class="fa fa-power-off">Logout</a></i></p>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>

		<br><br>
    
		<div class="content">
			<p>All Query</p><br><br>


	<table>
  
  <thead>
    <tr>
      <th scope="col" width="8px" style="font-size: 12 px;">ID</th>
      <th scope="col" width="80px" style="font-size: 12px;">Full Name</th>
      <th scope="col" width="60px" style="font-size: 12px;">Number</th>
      <th scope="col" width="120px" style="font-size: 12px;">Email</th>
      <th scope="col" style="font-size: 12px;">PC No</th>
      <th scope="col" style="font-size: 12px;">Room No</th>
      <th scope="col"style="font-size: 12px;">Dept</th>
      <th scope="col"style="font-size: 12px;" width= "150px">Description</th>
      <th scope="col" style="font-size: 12px;" width="60px">Date</th>
      <th scope="col" style="font-size: 12px;" width="80px">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include 'db_conn.php';
        $query = "SELECT * FROM registration";
        // echo $sql;
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
          var_dump(mysqli_error($conn));
          exit;
        }
        while($row = mysqli_fetch_assoc($result)){
          
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];

    // $name = $row['name'];
    $number =$row['number'];
    // $email = $row['email'];
    $pc_number = $row['pc_number'];
    $room_number = $row['room_number'];
    $department = $row['department'];
    $description = $row['description'];
    $date = $row['date'] ;
    echo '
      <tr>
      <td data-label="" style="font-size: 12px;">'.$id.'</td>
      <td data-label=""style="font-size: 12px;">'.$name.'</td>
      <td data-label="" style="font-size: 12px;">'.$number.'</td>
      <td data-label=""style="font-size: 12px;">'.$email.'</td>
      <td data-label=""style="font-size: 12px;">'.$pc_number.'</td>
      <td data-label="" style="font-size: 12px;">'.$room_number.'</td>
      <td data-label="" style="font-size: 12px;">'.$department.'</td>
      <td data-label="" style="font-size: 12px;">'.$description.'</td>
      <td data-label="" style="font-size: 12px;">'.$date.'</td>
      <td data-label="">
       
        <a href="con_with_user.php? deleteid='.$id.'"><span style= "
        background-color : orange;
        padding : 9px 11px;
        border-radius: 8px;
        " ><i class="fa-solid fa-check"></i></span></a> 


      </td>
    </tr>';
        }

?>


   

    
    
  </tbody>
</table>
		</div>



	</div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".user").click(function(){
    $(".profile-div").toggle(1000);
  });
  $(".hicon:nth-child(1)").click(function(){
    $(".notification-div").toggle(1000);
  });
  $(".sicon").click(function(){
    $(".search").toggle(1000);
  });
});
</script>

<script type="text/javascript">
	$('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});



	
</script>

<!-- <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"
></script> -->
</body>
</html>
