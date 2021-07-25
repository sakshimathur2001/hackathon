<?php
    $title='Index';
    require __DIR__ .'/includes/header.php';
    include('db/conn.php');
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css" />
    <title>NGO- <? echo $title ?></title>
  </head>
  <body>
      <?php 
        require __DIR__.'/includes/navbar.php';
      ?>
<h1>Hello, Home Page!</h1>
<a href="sector.php">SECTOR</a>
<a href="report.php">report</a>
<a href="payment.php">payment</a>
<?php require __DIR__ .'/includes/footer.php'; ?>    