<?php
    $title='Sector Page';
    require __DIR__ .'/includes/header.php';
    require_once 'db/conn.php';

    $results= $crud->getNgochild();
?>

<h1>Children</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">NGO Name</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php while($r= $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td scope="row"><a href="<?php echo $r['link']?>"><?php echo $r['name'] ?></td></a>
            </tr>
        <?php }?> 
    </tr>
    </tbody>
</table>

<?php require __DIR__ .'/includes/footer.php'; ?>    