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

<style>
    .table{
        padding : 1;
    }

    .a {
        color : red;
    }
</style>

<!-- Créer le tableau -->
<table border 1>

<!--Entête du Tableau -->
    <thead>
            <tr><!-- Créer les cases de l'entête du tableau -->
                <th>Pays</th><th>Capitales</th><th>Liens Wiki</th>
            </tr>
    </thead>

<body>
    <tr>
        <td>ALLEMAGNE</td>
        <td>Berlin</td>
        <td><a href=https://fr.wikipedia.org/wiki/Berlin target='_blank'>Lien</a></td>            
    </tr>
</body>

<body>
    <tr>
        <td>ESPAGNE</td>
        <td>Madrid</td>
        <td><a href=https://fr.wikipedia.org/wiki/Madrid target='_blank'>Lien</a></td>            
    </tr>
</body>

<body>
    <tr>
        <td>FRANCE</td>
        <td>Paris</td>
        <td><a href=https://fr.wikipedia.org/wiki/Paris target='_blank'>Lien</a></td>            
    </tr>
</body>

<body>
    <tr>
        <td>ITALIE</td>
        <td>Rome</td>
        <td><a href=https://fr.wikipedia.org/wiki/Rome target='_blank'>Lien</a></td>            
    </tr>
</body>

<body>
    <tr>
        <td>USA</td>
        <td>Washington</td>
        <td><a href=https://fr.wikipedia.org/wiki/Washington target='_blank'>Lien</a></td>            
    </tr>
</body>



<?php

$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
asort($capitales)
?>