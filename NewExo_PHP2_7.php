
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VII. Exercice 7</h1>
    <h2>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</h2>
    
    <style>
        
    </style>

    <?php

    $elements = array("choix 1"=>" ", "choix 2"=>"checked","choix 3"=>" ") ;
    function genererCheckbox($elements){

        echo "<fieldset>";

        foreach ($elements as $element => $choix) {
            echo' <div>
        <input type="checkbox" '.$choix.' id="scales" name="test"/>
        <label for="scales">'.$element.'</label>
      </div>';
        }

        echo "</fieldset>";
        
    }
    genererCheckbox($elements)

    ?>
    

        </body>
        </html>