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

<!DOCTYPE Html>
<html>
    <head>
        <h1>Exercice 4 PHP2 - Tableaux html et associatif"</h1>
    </head>

    <body>
        <table border="1">
            <tr>
                <th>Pays</th>
                <th>Capitales</th>
                <th>Liens</th>
            </tr>
            
                    <?php
                    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
                    foreach ($capitales as $pays => $capitale) {
                        echo '<tr>';
                        echo '<th>' . $pays . '</th>' ;
                        echo '<td>' .$capitale . '</td>';
                        // echo '<td>' <a href="https://fr.wikipedia.org/wiki/.$capitales." target="blank">Wikipédia</a>'</td>';
                        // echo '<td>' <a href=https://fr.wikipedia.org/wiki/.$capitale .>.$pays.</td>';
                        // https://www.lephpfacile.com/manuel-php/function.urlencode.php
                        echo '<td><a href=https://fr.wikipedia.org/wiki/"' . urlencode($capitale) . "' target='_blank'>Lien</a>'</td>';
                        // https://developer.mozilla.org/fr/docs/Web/HTML/Element/a#href
                        // echo "<a href=https://www.elan-formation.fr target='_blank'>Elan Formation</a>";
                        // echo '<td> "<a href=https://fr.wikipedia.org/wiki/'<td>' .$capitale . '</td>' target='_blank'>Wikipédia</a>"'</td>';
                        
                        echo '</tr>';
                    }
                    ?>

    </table>
    </body>

</html>