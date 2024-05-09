<?php
require 'database.php';
    if(isset($_SESSION["id"])){
        header("Location: homepage.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/loginNregister.css">
</head>
<body>
    <div id="id" class="">
        <form autocomplete = "off" class="form" action = "" method = "post">
            <div class="container">
                <h1>User Registration</h1>
                <p>Please fill the below form to complete your registration</p>
                
                <input type = "hidden" id ="action" value = "register">

                <label for="surname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id = "username" value = "" required>
                
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id = "email" value = ""required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id ="password" name="password" value = ""required>

                <label for="cpasswordt"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" id = "confirmpassword" name="confirmpassword" value= "" required>
                
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button" onclick="'" class="cancelbtn">Cancel</button>
                        <button type="button" onclick = "submitData();" class="signupbtn">Sign Up</button>
                    </div>

                    <div class="container signin">
                        <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
                    </div>
            </div>
        </form>
    </div>

<?php 
require 'script.php';
?>

<!--<script src="script.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>-->

</body>
</html>
