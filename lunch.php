<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lunch</title>
<link rel="stylesheet" href="css/recipemenu.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
session_start();
include("connect.php");
include("registernew.php");
if( $_SESSION['fname'] == false){
  header("Location: index.php");
}
?>
  <header>
    <div class="container">
      <a href="#" class="logo">Chef : <?php echo $_SESSION['fname'] ." " . $_SESSION['lname']?>
</a>
      <nav>
        <div class="icon">
          <i class="fas fa-bars menu"></i>
        </div>
        <ul id="nav-men">
          <li><a href="main.php">Home</a></li>
          <li><a href="logout.php">log out</a></li>
        </ul>
      </nav>

      
    </div>
  </header>
  <div class="container-recipe">
    <h1>lunch</h1>
    <div class="recipe">
      <div class="rec-photo">
        <img src="recipes/breakfast/pexels-steve-house-14302155.jpg" alt="">
      </div>
      <div class="rec-desc">
        <h2>Ham and Swiss Omelet</h2>
        <p>A Ham and Swiss Omelet is a delicious breakfast dish made by folding diced ham and Swiss cheese into beaten eggs, then cooking the mixture until firm. This classic omelet offers a savory flavor with a crispy texture.</p>
        <a href="recipes/breakfast/eggs.html">See recipe</a>
      </div>
    </div>
    <div class="recipe">
      <div class="rec-photo">
        <img src="recipes/breakfast/pexels-nishant-aneja-2955819.jpg" alt="">
      </div>
      <div class="rec-desc">
        <h2>breakfast burrito</h2>
        <p>A breakfast burrito is a popular morning meal consisting of a flour tortilla filled with a variety of ingredients typically enjoyed at breakfast, such as scrambled eggs, cooked breakfast meats like bacon or sausage.</p>
        <a href="recipes/breakfast/breakfastbro.html">See recipe</a>
      </div>
    </div>

  </div>
</body>
</html>