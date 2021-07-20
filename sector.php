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
        <img src="images/enviornment.png" alt="Enviornment" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_env.php">Enviornment</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/women.png" alt="Women's Development and Empowerement" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_wd.php">Women's Development and Empowerement</a></div>
        </div>
    </div>
    
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/urban.png" alt="Urban Development and Poverty Alleviation" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_ud.php">Urban Development and Poverty Alleviation</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/animal.png" alt="Animal Husbandry, Dairying and Fisheries" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_ah.php">Animal Husbandry, Dairying and Fisheries</a></div>
        </div>
    </div>
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/children.png" alt="Children" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_child.php">Children</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/hiv.png" alt="HIV and AIDS" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_hiv.php">HIV and AIDS</a></div>
        </div>
    </div>
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/aged.png" alt="Elderly/Aged" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_age.php">Elderly/Aged</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/agri.png" alt="Agriculture" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_agri.php">Agriculture</a></div>
        </div>
    </div>
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/disable.png" alt="Differently Abled" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_dif.php">Differently Abled</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/education.png" alt="Education" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_edu.php">Education</a></div>
        </div>
    </div>
    </div>
    <div class="row rowheight">
    <div class="container column">
    <img src="images/energy.png" alt="New and Renewable Energy" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_energy.php">New and Renewable Energy</a></div>
        </div>
    </div>
    <div class="container column">
    <img src="images/human.png" alt="Human Rights" class="image">
        <div class="overlay">
        <div><a class="text" href="ngo_humr.php">Human Rights</a></div>
        </div>
    </div>
    </div>
</div>

    

<?php require __DIR__ .'/includes/footer.php'; ?>  