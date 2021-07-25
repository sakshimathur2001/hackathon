<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sectorReport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css_t/bootstrap.min.css">
    <link rel="stylesheet" href="css/css_t/sectorReport.css">
   
  </head>
  <header style="text-align: left;">
	<?php 
        require __DIR__.'/includes/navv.php';
      ?>
	  </header>
<body>

<h1 class="text-center ">Monthly Report</h1>


<div class="container ">
	
  <img src="images/junePic.png" alt="June pic" class="image">
  <div class="overlay">
    <a class="text" href="images/monthlyReport.pdf">June 2021</a>
  </div>
</div>

  <div class="row">
   <div class="col-sm-12 ">
  
    <img src="images/archivePic2.png" alt="Archive" style="width:100%">
</div>



 <div class="row-archive">
  <div class="column-archive">
  	<a  href="images/monthlyReport.pdf">
    <img src="images/march.png" alt="June Report" class="image" style="width:100%; " ></a>
        </div>

  <div class="column-archive">
  	<a  href="images/monthlyReport.pdf">
    <img src="images/april.png" alt="June Report" class="image" style="width:100%;" >
</a>
        </div>

   <div class="column-archive">
  	<a  href="images/monthlyReport.pdf">
    <img src="images/may.png" alt="June Report" class="image" style="width:100%;" >
</a>
        </div>
        <?php require __DIR__ .'/includes/footer.php'; ?>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>