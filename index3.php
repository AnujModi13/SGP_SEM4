<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login page</title>
    <script src="https://kit.fontawesome.com/421e558d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous"
  />
</head>
<body>
<div class="content1">
        <div class="div1"></div>
        <div class="div2">
            <div class="login-content">  
       
    <div class="content">
        
        <header>admin login</header>
        <form action="adminlogin.php" method="post">
        <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" required placeholder="username" name="name"/>
                <span class="show">Show</span>
            </div>  <br>
            <!-- <div class="field">
                <span class="fa fa-box"></span>
                <input type="text" required placeholder="Enter E-mail" name="email" />
            </div>  <br> -->
            
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key" required placeholder="Password" name="password"/>
                <span class="show">Show</span>
            </div>
              
            <div class="pass">
                <a href="index.php">back to user login page</a> 
            </div> 

            <!-- <div class="pass">
                <a href="index1.php">click here if you are admin</a> 
            </div> -->
            
            <div class="field">
                <input type="submit" value="login"  />
            </div>

            </div>
        </form>
       

</div>
</div> 
    </div>
    <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"
></script>
</body>
</html>