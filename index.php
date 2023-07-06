<?php
     include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
    <div id="form">
    <center><img src="pic_trulli.jpg" alt="Italian Trulli"></center>
        <h1>Login Form</h1>
        <form name="form" action="login.php" method="POST"
            <label>Username: </label>
            <input type="text" id="user" name="user"><br></br>
            <label>Password </label>
            <input type="password" id="pass" name="pass"><br></br>
            <input type="submit" id="btn" value="Login" name="submit">
            <input type="submit" id="btn" value="Cancel" name="submit">
            
    </form>
    </div>
</body>
</html>
