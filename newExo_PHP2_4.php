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
<?php
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: grey;
            font-size: x-large;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
                <th>Liens Wiki</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($capitales as $pays => $capitale) {
                echo '<tr>';
                echo '<td>' . $pays . '</td>';
                echo '<td>' . $capitale . '</td>';
                echo '<td><a href="https://fr.wikipedia.org/wiki/' . $capitale . '" target="_blank">Lien</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
