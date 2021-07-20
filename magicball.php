<?php
    //Je déclare mon tableau
    $predictions = array();

    //Je remplis mon tableau
    $predictions[] = "Peut être";
    $predictions[] = "Je ne pense pas";
    $predictions[] = "Il y a de fortes chances que cela arrive";
    $predictions[] = "N'y pense même pas";
    $predictions[] = "Pas pour le moment";
    $predictions[] = "Absolument";
    $predictions[] = "Carément!";

    //Je définis une variable 
    $hasard = rand(0,count($predictions)-1);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma boule magique</title>
</head>
<body>
    <form >
    <label>Posez votre question et le destin vous répondra</label>
    <input type="text">
    <input type="submit" value="Réponse">
    </form>
    <?php
        
        echo $predictions[$hasard];
    ?>

    <br>
    <br>
    <br>
</body>
</html>