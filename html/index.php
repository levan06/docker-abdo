<!DOCTYPE html>
<html>
<head>
    <title>Test PHP</title>
</head>
<body>

    <h1>Apprentissage PHP</h1>

    <?php
    // 1. Variables
    $nom = "Abdo";
    $age = 16;

    echo "<h2>Variables</h2>";
    echo "Nom : $nom <br>";
    echo "Age : $age ans <br><br>";

    // 2. Condition
    echo "<h2>Condition</h2>";

    if ($age >= 18) {
        echo "Majeur";
    } else {
        echo "Mineur";
    }

    echo "<br><br>";

    // 3. Tableau
    echo "<h2>Tableau</h2>";

    $langages = ["PHP", "HTML", "CSS", "JavaScript"];

    foreach ($langages as $langage) {
        echo "- $langage <br>";
    }

    echo "<br>";

    // 4. Fonction
    echo "<h2>Fonction</h2>";

    function saluer($prenom)
    {
        return "Bonjour $prenom !";
    }

    echo saluer("Abdo");

    echo "<br><br>";

    // 5. Boucle FOR
    echo "<h2>Boucle FOR</h2>";

    for ($i = 1; $i <= 5; $i++) {
        echo "Ligne $i <br>";
    }
    ?>

    <hr>

    <h2>Formulaire</h2>

    <form method="POST">
        Nom :
        <input type="text" name="user_nom">
        <br><br>

        Age :
        <input type="number" name="user_age">
        <br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php

    // 6. Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userNom = htmlspecialchars($_POST["user_nom"]);
        $userAge = (int)$_POST["user_age"];

        echo "<hr>";
        echo "<h2>Résultat</h2>";

        echo "Nom : $userNom <br>";
        echo "Age : $userAge ans <br>";

        if ($userAge >= 18) {
            echo "Vous êtes majeur.";
        } else {
            echo "Vous êtes mineur.";
        }
    }
    ?>

</body>
</html>