



<!DOCTYPE html>
<html>



<head>
    <h1>Tableau Html pour PHP</h1>
</head>



<body>
    <table border 5> 

        <tr>
            <td>Pays</td><td>Capitales</td>
        </tr>

        <?php
        $tabCapitales=array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"
        );
        foreach($tabCapitales as $pays=>$capitale) {
            echo '<tr>';
            echo '<td>' .$pays. '</td>';
            echo '<td>'.$capitale.'</td>';
            echo '</tr>';
        }
        ?>

    </table>
</body>




</html>