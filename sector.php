<?php
    $title='Sector Page';
    require __DIR__ .'/includes/header.php';
    include('db/conn.php');
?>
<div class="sector_top">
   <h1 class="display-1">Sectors</h1>
</div>
<div class="sector_middle">
    <h2>Choose the sector you would like to donate to </h2>
</div>
<div class="sector_list">
    <div class="row rowheight">
    <div class="container column">
        <img src="images/ecological.png" alt="Enviornment" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_env.php">Enviornment</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/feminine.png" alt="Women's Development and Empowerement" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_wd.php">Women's Development and Empowerement</a></div>
        </div>
    </div>
    
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/poverty.png" alt="Urban Development and Poverty Alleviation" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_ud.php">Urban Development and Poverty Alleviation</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/protect.png" alt="Animal Husbandry, Dairying and Fisheries" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_ah.php">Animal Husbandry, Dairying and Fisheries</a></div>
        </div>
    </div>
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/boy.png" alt="Children" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_child.php">Children</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/protection.png" alt="HIV and AIDS" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_hiv.php">HIV and AIDS</a></div>
        </div>
    </div>
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/couple.png" alt="Elderly/Aged" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_age.php">Elderly/Aged</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/agriculture.png" alt="Agriculture" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_agri.php">Agriculture</a></div>
        </div>
    </div>
    </div>
</div>

    

<?php require __DIR__ .'/includes/footer.php'; ?>  