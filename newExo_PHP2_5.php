<h1>Exerice n°5 PHP 2</h1>

<h2>Créer une fonction pour un formulaire<br></h2>

<p>Consigne demandée : <br>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés. <br>
<br>Exemple :<br>
<br>$nomsInput = array("Nom","Prénom","Ville");<br>
<br>afficherInput($nomsInput);<br>
<br>Affichage demandé : Un tableau avec 3 champs en colonne à compléter.</p>


<!-- Il faut donc d'abord créer le tableau (partie HTML affichant une structure)
 Puis PHP pour obtenir des données (avec des champs à compléter) -->

 <head><title>Formulaire de saisie utilisateur </title></head>
    <body>
        <h1>Inscrivez-vous !</h1>
        <h2>Entrez les données demandées :</h2>
        <form name="inscription" method="post" action="form.php">
            Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
            Garçon ou fille ? 	<input type="radio" name="sexe" value="G"/>Garçon<input type="radio" name="sexe" value="F"/>Fille<br/>
            Entrez votre age : <input type="text" name="age"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
    </body>
    
<?php



?>