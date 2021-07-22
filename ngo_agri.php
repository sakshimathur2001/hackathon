<?php
    $title='Sector Page';
    require __DIR__ .'/includes/header.php'; 
    require_once 'db/conn.php';

    $results= $crud->getNgoagri();
?>

<h1 class="display-5 ngo_sectorname">Agriculture</h1>
<h4>List of NGOs</h4>
<div class="ngo_tablediv">
<table class="table table-bordered">
    <tbody>
    <tr>
        <?php while($r= $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><a href="<?php echo $r['link']?>" class="text-muted ngo_donate"><?php echo $r['name'] ?></a></td>
                <td><a href="sector.php" class="btn btn-secondary">Donate Here!</a></td>
            </tr>
            
        <?php }?> 
    </tr>
    </tbody>
</table>
</div>
<?php require __DIR__ .'/includes/footer.php'; ?>    