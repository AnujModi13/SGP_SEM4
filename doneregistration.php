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
    <title>Done registraion</title>
    <link rel="stylesheet" href="r2.css">
</head>
<body>
    <div class="content1">
        <div class="div1"></div>
        <div class="hero"><a class="nav-link" href="logout.php">LOGOUT</a></div>
        </div>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>