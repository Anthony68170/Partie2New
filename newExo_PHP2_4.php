<h1>Exerice n°4 PHP 2</h1>

<h2>Afficher un lien hypertexte<br></h2>

<p>Consigne demandée : <br>

<br>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale. <br>

<br>le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique. <br>

<br>Particularité demandée :<br>

<br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>

<br>https://fr.wikipedia.org/wiki/<br>

<br>Le tableau passé en argument sera le suivant :<br>

<br>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");<br></p>


<table> <!--Dessiner le tableau-->
    <thead> <!-- C'est l'entête (mnémoTech HEAD=ENTETE HTML simpsons)-->
        <tr> <!-- Dessinner La ou les cases de l'entete du tableau-->
            <th>Pays</th><th>Capitales</th><th>Liens</th>
        </tr>
    </thead> <!-- Ici je ferme l'entete, et en-dessous (BODY comme HTML simpsons) -->
    <tbody>

</table>

<?php

$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
echo '<tr><th>Pays</th><th>Capitale</th><th>Liens</th></tr>';
foreach ($capitales as $pays=>$capitale){
    echo '<tr>';
    echo '<td>' . $pays . '</td>';
    echo <td> . $capitale . '</td>';
    echo '<td> . href=<a"https://fr.wikipedia.org/wiki/ target="_blank">Lien</a></td>' . $capitale;
}

?>

</tbody>