<?php
    $title='Sector Page';
    require __DIR__ .'/includes/header.php';
    require_once 'db/conn.php';

    $results= $crud->getNgohumr();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css" />
    <title>Hackathon- <?php echo $title ?></title>
  </head>
  <body  style="background-image: url(images/wallpaperGrey.png);">
      <?php 
        require __DIR__.'/includes/navbar.php';
      ?>
<h1 style="color:#03989e; font-size:30px;">Human Rights</h1>

<h4 style="color:#03989e; font-size:20px;">List of NGOs</h4>
<div class="ngo_tablediv">
<table class="table table-bordered">
    <tbody>
    <tr>
        <?php while($r= $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><a href="<?php echo $r['link']?>" class="text-muted ngo_donate"><?php echo $r['name'] ?></a></td>
                <td><a href="payment.php" class="btn btn-secondary">Donate Here!</a></td>
            </tr>
            
        <?php }?> 
    </tr>
    </tbody>
</table>
</div>
<?php require __DIR__ .'/includes/footer.php'; ?>    