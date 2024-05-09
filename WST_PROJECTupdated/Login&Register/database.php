<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "authentication");

if(isset($_POST["action"])){
    if ($_POST["action"] == "register"){
        register();
}
else if ($_POST["action"] == "login"){
    login();
}
}
//Sign Up
    function register(){
        global $conn;

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = sha1($_POST["password"]);

        if(empty($username) || empty($email) || empty($password)){
            echo "All fields are required";
            exit;
        }

        $user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
            if(mysqli_num_rows($user) > 0 ){
                echo "Username has already taken";
                exit;
            }

            $user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
            if(mysqli_num_rows($user) > 0 ){
                echo "Email has already taken";
                exit;
            }

        $query = "INSERT INTO users VALUES('', '$username', '$email', '$password')";
        mysqli_query($conn, $query);
        echo "Successfully Registered";
    }

//Sign In
    function login(){
        global $conn;

        $email = $_POST["email"];
        $password = sha1($_POST["password"]);
        
        
        $user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($user) > 0){
            $row = mysqli_fetch_assoc($user);  
            if($password == $row["password"]){
                echo "Login Successful";
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
            }
            else{
                echo "Incorrect Password";
                exit;
            }
        }
        else{
            echo "User does not exist";
            exit;
        }
    }
?>