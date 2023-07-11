<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name'])) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    
    <script src="https://kit.fontawesome.com/421e558d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="r3.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous" />
    
</head>

<body>
    <nav class="navbar navbar-expand-rg sticky-top navbar-dark bg-body-tertiary bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">FIX-IT</a>
        <a class="navbar-brand" href="#">hello, <?php echo $_SESSION['name'];?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li> -->
        <li class="nav-item">
          <!-- <a  href="#">Pricing</a> -->
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>

        <!-- <li class="nav-item">
          <a  href="#">Pricing</a> 
          <a class="nav-link" href="admin.php">admin</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<section>
    <p class="num1">Solved query</p> <br>
</section>
<section>
    <div class="bg-color">
    <table class="central">
      <thead >
        <th class="c1" width="200px">Name</th>
        <th class="c1" width="200px">Email</th>
        <th class="c1" width="300px">Description</th>
        <th class="c1" width="300px">Update</th>
      </thead>

      <tbody>
        <?php
        include 'db_conn.php';
        $query = "select * from user";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {
          var_dump(mysqli_error($conn));
          exit;
        }
        while($row = mysqli_fetch_assoc($result)){
        ?>
        
        <tr style="border-bottom: 1px solid red; margin-top:20px;">
          <tr>
          <td class="c2" ><?php echo $row['name'] ?></td>
          <td class="c2"><?php echo $row['email'] ?></td>
          <td class="c2"><?php echo $row['description'] ?></td>
          <td class="c2">JOB DONE</td>
        </tr>
        <?php } 
        ?>
      </tbody>
    </table>
    </div>
</section>


<section>
<p class="num2">Register your query here</p>
</section>
<main>
<section>
<div class="content1">
        <div class="div1"></div>
        <div class="div2">
          <div class= "check">
<div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="connect.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name = "name" id = "name"placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">number</span>
            <input type="text" name="number" id = "number" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">PC-Number</span>
            <input type="text" name="pc_number" id="pc_number"placeholder="Ex - 24/224" required>
          </div>
          <div class="input-box">
            <span class="details">Room-Number</span>
            <input type="text" name="room_number" id="room_number"placeholder="Ex - 218-A" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" name="department" id="department"placeholder="Ex - CSPIT " required>
          </div>

          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" style="height:50px;width:725px;  text-align: justify;" name="description" id="description"placeholder="tell us your query " required>
          </div>
        </div>
        <div class="date-details">
        <span class="details">Date</span style=" align-self: center;">
            <input type="date" name="date" id="date"required>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</section> 
</main>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
}else{
    header("Location: index.php");
    exit();
}
?>