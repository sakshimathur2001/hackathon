<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hackathon</title>
    <link rel="stylesheet" href="css/css_t/bootstrap.min.css">
    <link rel="stylesheet" href="css/css_t/styles.css">
   
  </head>
<body style=" background:url('images/wallpaper.png');">
  
<?php 
        require __DIR__.'/includes/navv.php';
?>

  <div id="main-content" class="container"></div>
  <!--moved was before footer panel before-->
 
  <div class="row" >
   <div class="col-sm-12 ">
  
    <img src="images/world.gif" alt="Earth" style="width:100%; padding-left:5%; padding-right:5%; padding-bottom:5%;">
</div>




<div id="myCarousel" class="carousel slide loop" data-ride="carousel">
  <!--
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner autoplay col-sm-6 col-xs-12 col-xxs-12 column" ><!--should I keep in autoplay-->
    <div class="item active">
      
      <img class="img-fluid " src="images/Carousel1.png" alt="Carousel1img">
    </div>

    <div class="item">
    <img class="img-fluid " src="images/Carousel2.png" alt="Carousel2img">
    </div>


    <div class="item">
    <img class="img-fluid " src="images/Carousel3.png" alt="Carousel3img">
    </div>

    <div class="item">
    <img class="img-fluid " src="images/Carousel4.png" alt="Carousel4img">
    </div>

    <div class="item">
    <img class="img-fluid " src="images/Carousel5.png" alt="Carousel5img">
    </div>

    <div class="item">
    <img class="img-fluid " src="images/Carousel6.png" alt="Carousel6img">


    </div>
    <a href="sector.php"><!--LINK-->
    <button type="button" class="btn btn-outline-primary button-sector" >Explore Sectors for Donation</button>
  </a>
  </div>
  

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <!-- <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>-->
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <!--<span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>-->
  </a>
</div>

<div class="col-sm-6 col-xs-12 col-xxs-12 hidden-md hidden-xs hidden-xxs column ">
  <img src="images/donatePic.png " width="100%" height="50%"  margin="0"  >
  <a href="report.php">
   <button type="button" class="btn btn-outline-primary button-right" style="width: 98%; margin-bottom: 9px;">Monthly Sector Report</button>
  </a>
</div>
</div>

  

<div class="row">
  <div class="col-sm-12  ">
  <img src="images/services.png " width="100%"  margin="0"  >
   

</div>


<div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
    <li data-target="#myCarousel2" data-slide-to="2"></li>
    <li data-target="#myCarousel2" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="padding: 5%;"><!--should I keep in autoplay-->
    <div class="item active">
      
      <img class="img-fluid " src="images/testimonial1.png" alt="Testimonial1 img">
    </div>

    <div class="item">
    <img class="img-fluid " src="images/testimonial2.png" alt="Testimonial2 img">
    </div>


    <div class="item">
    <img class="img-fluid " src="images/testimonial3.png" alt="Testimonial3 img">
    </div>

    <div class="item">
    <img class="img-fluid " src="images/testimonial4.png" alt="Testimonial4 img">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control " href="#myCarousel2" data-slide="prev">
    <!--
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span> -->
  </a>
  <a class="right carousel-control " href="#myCarousel2" data-slide="next">
    <!--
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span> -->
  </a>
</div>
<?php 
        require __DIR__.'/includes/footer.php';
?>

     


<!--
<div class="loader-wrapper">
<span class="loader"></span>
</div>-->
  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="scripts_t/jquery-2.1.4.min.js"></script>
  <script src="scripts_t/bootstrap.min.js"></script>
  <script src="scripts_t/ajax-utils.js"></script>
  <!--
 
<script >
function show() {
    document.getElementById("loader-wrapper").style.display="block";
    setTimeout("hide()", 5);  // 5 seconds
}
function hide() {
    document.getElementById("loader-wrapper").style.display="none";
}
</script>-->
  <!--<script src="script.js"></script>-->



</body>
</html>