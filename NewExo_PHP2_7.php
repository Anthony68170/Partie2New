
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

    <!-- http://cours.thirion.free.fr/Cours/FormulairesPHP/Case-a-cocher-cours.php -->
    <!-- <table border="1">
        <tr>
            <th>
                
                </th>
            </tr>
            
        </table> -->
    <form>
       
        <input id="choix1" type = "checkbox" name = "Choix" value="1">
        <label for="choix1">Choix 1</label><br>
        
        <input id="choix2" type = "checkbox" name = "Choix" value="2">
        <label for="choix2">Choix 2</label> <br>
        <input id="choix3" type = "checkbox" name = "Choix" value="3">
        <label for="choix3">Choix 3</label> <br>
        <input type="submit" value="Valider">

       
         
    </form>
    <!-- function genererCheckbox
    <input type="checkbox" name="Choix 1" id="choix1" value="yes" <?php //echo ($elements['choix1']==1 ? 'checked' : ''); -->
    // $elements= array("choix1", "choix 2", "choix 3");
    //     foreach ($elements as $element => $choix) {
    // function genererCheckbox ($elements["Choix 1", "Choix 2", "Choix 3"]);
    
    // function genererCheckbox($elements){ 
    //     $result = ($elements);
    //     return $result;
    // };
    // <?
    // function $genererCheckbox = array("choix 1", "Choix 2", "choix 3");
    // for($i=0;$i<sizeof($elements);$i++){
    
    // echo"<input type='checkbox' name='choix[]' value='".$elements[$i]."'>".$element[$i]."<br>";
    // }<?php

    $elements = array("choix"=>"1", "choix"=>"2","choix"=>"3");
    foreach ($elements as $name => $value){
        echo $elements[$value];
    }

    ?>
    ?>
    ?>
</body>
</html>