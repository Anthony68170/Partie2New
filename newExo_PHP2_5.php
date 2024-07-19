<h1>Exerice n°5 PHP 2</h1>

<h2>Créer une fonction pour un formulaire<br></h2>

<p>Consigne demandée : <br>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. <br>
<br>Exemple :<br>
<br>$nomsInput = array("Nom","Prénom","Ville");<br>
<br>afficherInput($nomsInput);<br>
<br>Affichage demandé : Un tableau avec 3 champs en colonne à compléter.</p>


<!-- Il faut donc d'abord créer le tableau (partie HTML affichant une structure)
 Puis PHP pour obtenir des données pour ensuite les afficher  -->

 <h3>Affichage</h3>
    <body>
        <form form="Nom" method="post" action=" ">
            Nom <br><input type="text" name="nom"/> <br/>
            Prénom <br><input type="text" firstname="Prénom"/> <br/>
            Ville <br><input type="text" city="Ville"/> <br/>
        </form>
    </body>

<?php

foreach($form as $ => $)
$form count
echo "$name", "$firstname", "$city";

?>