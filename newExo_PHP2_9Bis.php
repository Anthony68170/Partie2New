<?php

    $nomsRadio = array("Masculin", "Féminin","Autre") ;
    function afficherRadio($nomsRadio){

        echo "<fieldset>";

        foreach ($nomsRadio as $element => $choix) {
            echo' <div>
        <input type="radio" '.$choix.' id="scales" name="test"/>
        <label for="scales">'.$element.'</label>
      </div>';
        }

        echo "</fieldset>";
        
    }
    afficherRadio($nomsRadio)

    ?>