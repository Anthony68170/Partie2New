<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercice 4Bis PHP2 - Tableau indexé html & associatif PHP</h1>
<table border="1">
    <tr>
        <th>Pays</th>
        <th>Capitales</th>
        <th>Liens</th>
    </tr>
    <?php

    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

    foreach ($capitales as $pays => $capitale) {
        $capitale = $pays;
        $url = $pays;
        echo "<tr>";
        echo "<td>" . $pays . "</td>";
        echo "<td>" . $capitale . "</td>";
        // echo "<td><a href='" https://fr.wikipedia.org/wiki/"' target='_blank'>Lien" . $capitale . "</a></td>";
        echo "<td><a href='https://fr.wikipedia.org/wiki/" . urlencode($capitale) . "' target='_blank'>Lien</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
