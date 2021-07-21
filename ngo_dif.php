<?php
    $title='Sector Page';
    require __DIR__ .'/includes/header.php'; 
    require_once 'db/conn.php';

    $results= $crud->getNgodif();
?>

<h1 class="display-5">Differently Abled</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th style="background: #03989e;">NGO Name</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php while($r= $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><a href="<?php echo $r['link']?>" class="text-muted"><?php echo $r['name'] ?></td></a>
            </tr>
        <?php }?> 
    </tr>
    </tbody>
</table>

<?php require __DIR__ .'/includes/footer.php'; ?>    