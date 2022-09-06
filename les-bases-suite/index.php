<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Document</title>
</head>
<body>
    <h1>php les bases</h1>
    <?php
    $age = 42;
    $prenom='jean-françois';
    $nom='Damour';
    const VERSION = 1;
        echo 'Bonjour je m\'appelle '.$prenom.' ' .$nom.' j\'ai '.$age.' 
        ans.';
        
       echo "<p>bonjour les gens</p>";

       $tableau =[1,2,3,4];
       $tableau[] ="Coucou";//pour ajouter un élément au tableau
        echo $tableau[6];
       var_dump($tableau);
    ?>
    <footer>
        <p id="version">Version :<?php echo VERSION ?></p>
    </footer>
</body>
</html>