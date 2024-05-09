<?php
require 'database.php';
    if(isset($_SESSION["id"])){
        header("Location: homepage.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/loginNregister.css">
</head>
<body>
<div id="id" class="">
    <form autocomplete = "off" action = "" class="form" method = "post">
        <div class="container">
            <h1>User Login</h1>
            <p>Please fill in your credentials to login</p>
            
            <input type = "hidden" id ="action" value = "login">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id = "email" value = "" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id ="password" value = "" required>

            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

                <div class="clearfix">
                    <button type="button" onclick="'" class="cancelbtn">Forgot Password</button>
                    <button type="button" onclick="submitData();" class="signupbtn">Login</button>
                </div>

                <div class="container signin">
                    <p>Don't have an account? <a href="signup.php">Sign up</a>.</p>
                </div>
        </div>
    </form>
</div>

<?php 
require 'script.php';
?>
<!--<script src="script.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>-->

</script>
</body>
</html>
