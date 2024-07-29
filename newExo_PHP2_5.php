<h1>Exerice n°5 PHP 2</h1>

<h2>Créer une fonction pour un formulaire<br></h2>

<p>Consigne demandée : <br>Créer une fonction personnalisée permettant de créer un formulaire de champs 
de texte en précisant le nom des champs associés. <br>
<br>Exemple :<br>
<br>$nomsInput = array("Nom","Prénom","Ville");<br>
<br>afficherInput($nomsInput);<br>
<br>Affichage demandé : Un tableau avec 3 champs en colonne à compléter.</p>


<!-- Il faut donc d'abord créer le tableau (partie HTML affichant une structure)
 Puis PHP pour obtenir un remplissage auto des données à afficher  -->

 <h3>Affichage</h3>
    <body>
        <form nomInput="Nom" method="post" action=" ">
        <!-- https://openclassrooms.com/fr/courses/1603881-creez-votre-site-web-avec-html5-et-css3/8061492-creez-des-formulaires -->
            <label>Votre nom</label> : <br><input type="text" name="nom"> <br/>
            <label>Votre prénom</label> : <br><input type="text" firstname="Prénom"/> <br/>
            <label>Votre adresse mail</label> : <br><input type="text" mail="Mail"/> <br/>
            <label>Votre ville</label> :  <br><input type="text" city="Ville"/> <br/>
        </form>
    </body>

    <?php
    
    function afficherInput($nomInput){ 
    echo"afficherInput".$nomInput[""]."".$nomInput[""]
    };
    
    $nomInput=array("Nom","Prénom","Ville")


// $nomInput = array("Nom", "Prénom", "Ville")
// foreach($nomInput as $prenom => $ville) {
//     echo "". $form[$key] ."".
// }

?>