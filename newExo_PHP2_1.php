<h1>Exerice n°1 PHP 2</h1>

<p>Créer une fonction personnalisée "convertirMajRouge()", permettant de transformer une chaîne de
caractères (pécédemment enregistrée/appelée) nommée "paramètre ou argument", en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte)</p>

<h2>Résultat demandé</h2>
<p>Affichage demandé (si $texte = « Mon texte en paramètre ») alors 
MON TEXTE EN PARAMETRE (doit apparâitre en capital et en rouge)</p>

<style>
.red {

    color : red;
}
</style>

<?php
                                // PHP Niveau 2 => EXERCICE 1 


// 1
$texte = "Mon texte en paramètre"; 

// 2A 
echo convertirMajRouge($texte); // 2B

/* 3A ATTENTION : Faire attention aux règles "camelCase" nommant la "function" => 1ère lettre en minuscule, 
et chaque mot suivant 1ère lettre en Majuscule*/
function convertirMajRouge($texte){ // 3B
    $result = mb_strtoupper($texte); // 3C
    $result = "<p class='red'>".$result."</p>"; // 3D
    return $result;
};

/*  
1 Faire naître le texte pour le modifer par la suite
2A Permet d'afficher le résultat de la fonction "convertirMajRouge et intégrer le paramètre/argument dans les ()
2B On lui fait dire : "Affiche le résultat donc echo , de la fonction (convertirMajRouge), qui admet l'argument ($texte)
3A ATTENTION : Faire attention aux règles "CAMELCASE" nommant "function" => 1ère lettre en minuscule, 
               et chaque mot suivant 1ère lettre en Majuscule
3B function accepte les "paramètres / arguments" c'est à dire les éléments permettant de faire fonctionner function
3C 
3D                   
*/

 ?>
