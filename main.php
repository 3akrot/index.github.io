<?php
session_start();
include("connect.php");
include("registernew.php");
if( $_SESSION['fname'] == false){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  <title>Project</title>
</head>
<body>
   <!-- Header start -->
   <header>
    <div class="container">
      <a href="#" class="logo">Chef : <?php echo $_SESSION['fname'] ." " . $_SESSION['lname']?>
</a>
      <nav>
        <div class="icon">
          <i class="fas fa-bars menu"></i>
        </div>
        <ul id="nav-men">
          <li><a href="#">Home</a></li>
          <li><a href="logout.php">log out</a></li>
        </ul>
      </nav>

      
    </div>
  </header>
  <!-- Header end -->
  <!-- Landing start-->
  <section class="landing">
      <div class="blue-box">
        <div class="text">
          <h1><b>Chef</b><br></h1>
          <p>An online platform offering a variety of recipes for cooking, including breakfast, lunch, dinner, and desserts. 
            Features a wide range of recipes from various cuisines, with ingredient quantities, preparation methods, and illustrative photos</p>
        </div>
    </div>
  </section>
  <!-- landing end -->
  <!-- viedo start -->
  <section class="video">
    <video autoplay muted loop>
      <source src="assets/video (720p).mp4" type="video/mp4">
    </video>
    
    <div class="text">
      <ul>
        <li>Nutritional Information.</li>
        <li>Ingredient Substitutions.</li>
        <li>Detailed Recipe Pages.</li>
        <li>Step-by-Step Instructions</li>
      </ul>
    </div>
  </section>

  <!-- video end -->
  <section class="feat" id="Features">
    <div class="container">
      <div class="box ">
        <div class="image">
          <img src="assets/pexels-ash-376464.jpg" alt="">
        </div>
        <div class="text">
          <h2>breakfast</h2>
          <p>Breakfast is the most important meal of the day, and having a delicious breakfast is a must</p>
            <a href="breakfast.php"><span class="on">More</span></a>
          
        </div>
      </div>
      <div class="box ">
        <div class="image">
          <img src="assets/pexels-eneida-nieves-803963.jpg" alt="">
        </div>
        <div class="text">
          <h2>lunch</h2>
          <p>Lunch is an essential part of the day, providing a midday refuel to keep you energized and focused. </p>
          <a href="lunch.php"><span class="on">More</span></a>
        </div>
      </div>
      <div class="box ">
        <div class="image">
          <img src="assets/pexels-robin-stickel-70497.jpg" alt="">
        </div>
        <div class="text">
          <h2>dinner</h2>
          <p>Dinner is the cornerstone of the day, a time to unwind and replenish after a busy day. </p>
          <a href="dinner.php"><span class="on">More</span></a>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <span>&copy;Chef</span>recipes</footer>

  <script src="https://kit.fontawesome.com/4b0768c77c.js" crossorigin="anonymous"></script>
  <script src="javascript/main.js"></script>
</body>
</html>