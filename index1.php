<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
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
        <div class="new1">


        </div>
        <header>sign-up page</header>
        <form action="userinfo.php" method="post">
        <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" required placeholder="user name" name="name"/>
                <span class="show">Show</span>
            </div>  <br>
            <div id="form">
            <div class="field">
                <span class="fa fa-box"></span>
                <input type="text" required placeholder="Enter E-mail" name="email" id = "email" onkeydown="validation()"/>
            </div>  
            <span id="text" style = "
            padding: 5px;
            border-radius: 5px;"></span>
            </div>
            <br>
            
            <div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" class="pass-key" required placeholder="Password" name="password" />
                <span class="show">Show</span>
            </div>
              
            <div class="pass">
                <a href="">need help</a> 
            </div> 
            
            <div class="field">
                <input type="submit" value="sign-up"  />
            </div>

            </div>
        </form>
</div>
</div>

      
    </div>

    <script>//document.getElementsByClassName

function validation()
{
        var email = document.getElementById("email").value;
        var form = document.getElementById("form");
        var text = document.getElementById("text");
        var pattern = /^[^ ]+@[^ ]+\.[a-z]+\.[a-z]$/;
    

        if(email.match(pattern)){
            form.classList.add("valid");
            form.classList.remove("invalid");
            
            text.innerHTML ="your Email is valid";
            text.style.color = "#00ff00";
            text.style.background = "#373737";
            
            


        }
        else{
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML ="please enter valid CHARUSAT Id";
            text.style.color = "#ff0000";
            text.style.background = "#373737";

        }

        if(email == ""){
            form.classList.remove("valid");
            form.classList.remove("invalid");
            text.innerHTML ="Enter Your CHARUSAT Email!";
            text.style.color = "#00ff00";
            text.style.background = "#373737";


        }
       }
</script>
    <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
  crossorigin="anonymous"
></script>
</body>
</html>




