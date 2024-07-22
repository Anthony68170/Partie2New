

<h1>VI. Exercice 6</h1>

<h2>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
<br> Exemple :<br></h2>
<p>$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);<br></p>

<body>
    <form>
    <!-- https://openclassrooms.com/forum/sujet/question-formulaire-et-php-14394 -->
    <select name='civilite'>
        <option value='monsieur' >Monsieur</option>
        <option value='madame' >Madame</option>
        <option value='mademoiselle' >Mademoiselle</option>
    </select>
    </form>
</body>

<?php
function alimenterListeDeroulante($elements){
    echo "<option value=" .$elements.> .$element."</option>";
}
$elements= array("Monsieur","Madame","Mademoiselle") ;

alimenterListeDeroulante($elements) ;

// https://www.phptutorial.net/php-tutorial/php-select-option/
?>
