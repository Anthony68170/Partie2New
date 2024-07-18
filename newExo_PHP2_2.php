<h1>Exerice n°2 PHP 2</h1>

<p>Soit le tableau suivant :<br>
$capitales = array<br>
<br>("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome").<br>
<br>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.<br>
<br>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultat demandé</h2>
<p>Affichage demandé<br>
<br>Un tableau associatif intégrant les Pays (1ère colonne) et leurs capitales respectives (2ème colonne)</p>

<table border=1>

<!--Entête du Tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>

<!--Corps du Tableau -->
<body>
    <tr>
        <td>France</td>
        <td>Paris</td>
        <td></td>
        <td></td>
    </tr>
</body>
</table>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
]

?>