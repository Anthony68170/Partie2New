<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 PHP2</title>
    <style>html{
        width: 30%;
    }
    .form-input {
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
    <h1>Formulaire avec des fonctions personnalisées</h1>
    <form method="GET" action="process.php">
        <div class="formulaire">
            <label for="name">Votre nom</label><br>
            <input type="text" name="name" id="name" required><br><br>
            <label for="firstname">Votre prénom</label><br>
            <input type="text" name="firstname" id="firstname" required><br><br>
            <label for="mail">Votre mail</label><br>
            <input type="text" name="mail" id="mail" required><br><br>
            <label for="city">Votre ville</label><br>
            <input type="text" name="city" id="city" required><br><br>
        </div>

        <!-- <div -->
        <select name='Formation'>
            <option value='Devs' >Développeur Logiciel</option>
            <option value='Design' >Designer Web</option>
            <option value='Integ' >Intégrateur</option>
            <option value='Chef' >Chef de projet</option>
        </select><br><br>
        <!-- </div> -->

        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="Masculin") echo "checked";?>
        value="Masculin">Male<br>

        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="Féminin">Female<br>

        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="other") echo "checked";?>
        value="Autre">Other
        

        <div class="formulaire"><br>
            <input type="submit" value="Submit">
        </div>

    </form>
    
    <?php
    
include(afficherInput($nomInput)){
    echo include("afficherInput")
};

include(alimenterListeDeroulante($elements)){
    echo "alimenterListeDeroulante"
};


    ?>

</body>
</html>