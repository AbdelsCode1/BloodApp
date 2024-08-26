<?php 
    include("connect.php");
    ?>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="auth.css">
        <link rel="shortcut icon" href="Resources/blood.ico" type="image/x-icon">
    </head>
    <body>
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="connect2.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="username" name="username" ></br></br>
                <label>Password: </label>
                <input type="password" id="password" name="password"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var username = document.form.username.value;
                var password = document.form.password.value;
                if(username.length=="" && password.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(username.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(password.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>