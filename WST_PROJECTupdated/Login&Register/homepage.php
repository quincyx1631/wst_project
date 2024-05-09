<?php
require 'database.php';
if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'"));   
}
else{
    header("Location: signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/homepage.css">
</head>
<body>

<nav class="navbar">
  <div class="container">
    <div class="header" id="myheader">
      <ul class="header-info">
        <li class="home"><a href="#">Home</a></li>
        <li><a href="products.html">Products</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
        <li><h2>Welcome <?php echo $user["username"]?></h2></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="../Pictures/shoes.jpeg" class="img-responsive" alt="Shoes"></div>
        <div class="panel-footer">Buy 50 shoes and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="../Pictures/shoes.jpeg" class="img-responsive" alt="Shoes"></div>
        <div class="panel-footer">Buy 50 shoes and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="../Pictures/shoes.jpeg" class="img-responsive" alt="Shoes"></div>
        <div class="panel-footer">Buy 50 shoes and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="../Pictures/shoes.jpeg" class="img-responsive" alt="Shoes"></div>
        <div class="panel-footer">Buy 50 shoes and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="../Pictures/shoes.jpeg" class="img-responsive" alt="Shoes"></div>
        <div class="panel-footer">Buy 50 shoes and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="../Pictures/shoes.jpeg" class="img-responsive" alt="Shoes"></div>
        <div class="panel-footer">Buy 50 shoes and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><br>
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>About Us</h4>
          <p>BSIT 3RD YEAR STUDENT</p>
        </div>
        <div class="col-md-4">
          <h4>Contact Us</h4>
          <p>Email: guepangit@gmail.com<br>Phone: 12345677</p>
        </div>
        <div class="col-md-4">
          <h4>Follow Us</h4>
          <p>facebook</p>
          <p>google</p>
        </div>
          <ul class="list-inline">
            <li><a href="#"><span class="glyphicon glyphicon-facebook"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-twitter"></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  </body>
  </html>
