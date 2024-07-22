<?php 


function repeterImage($urlImage, $cmpt) {
    for ($i = 0; $i < $cmpt; $i++) { ?>
    
    <img src="<?= $urlImage ?>" >
    

    <?php }   
}



// definition des variables

//url
const URL = "https://my.mobirise.com/data/userpic/764.jpg";
// compteur
$repeterImage = 4;
// appel de la function avec comme argument de nos deux variables
repeterImage($urlImage, $repeterImage);


