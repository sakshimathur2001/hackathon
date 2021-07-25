<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hackathon About Us</title>
    <link rel="stylesheet" href="css/css_t/bootstrap.min.css">
    <link rel="stylesheet" href="css/css_t/stylesheetAboutUs.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  </head>

  <body style="background: url(images/wallpaperGrey.png);">
  <?php 
        require __DIR__.'/includes/navv.php';
      ?>
  <div id="main-content" class="main-container">
	<h1 class="text-center " style="color:#03989e">About Us</h1>
 <video width="100%"  controls>
  <source src="images/introVideoWithMusic.mp4" type="video/mp4">
  
</video>

 
<div class="row">
<div >
	<img src="images/goals.png " style="width:100%">
</div>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner autoplay"><!--should I keep in autoplay-->
    <div class="item active">
      
      <img class="img-fluid img1 TarImage" src="images/meetTheTeam.png" alt="Tarini img">
    </div>

    <div class="item">
    <img class="img-fluid img1 TarImage" src="images/yash.png" alt="Tarini img">
    </div>


    <div class="item">
    <img class="img-fluid img1 SakshiImage" src="images/sakshi.png" alt="Sakshi img">
    </div>

    <div class="item">
    <img class="img-fluid img1 SakshiImage" src="images/aboutUsTar.png" alt="Sakshi img">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control autoplay loop" href="#myCarousel" data-slide="prev">
  	<!--
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span> -->
  </a>
  <a class="right carousel-control autoplay loop" href="#myCarousel" data-slide="next">
  	<!--
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span> -->
  </a>
</div>
<div style="margin-top:2%;">
<?php require __DIR__ .'/includes/footer.php'; ?>  
</div>
<!-- jQuery (Bootstrap JS plugins depend on it) -->
<script src="scripts_t/jquery-1.11.3.min.js"></script>
  <script src="scripts_t/bootstrap.min.js"></script>
 <!-- <script src="script.js"></script>-->
</body>
</html>