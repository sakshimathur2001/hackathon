<?php
    $title='Sector Page';
    require __DIR__ .'/includes/header.php';
    require_once 'db/conn.php';

    $results= $crud->getNgoedu();
?>

<h1>Education</h1>

<table class="table">
    <tr>
        <th>NGO Name</th>
    </tr>
    <tr>
        <?php while($r= $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><a href="<?php echo $r['link']?>"><?php echo $r['name'] ?></td></a>
            </tr>
        <?php }?> 
    </tr>
</table>

<?php require __DIR__ .'/includes/footer.php'; ?>    