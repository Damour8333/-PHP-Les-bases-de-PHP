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
    // $age = 42;
    // $prenom='jean-françois';
    // $nom='Damour';
    // const VERSION = 1;
    //     echo 'Bonjour je m\'appelle '.$prenom.' ' .$nom.' j\'ai '.$age.' 
    //     ans.';
        
    //    echo "<p>bonjour les gens</p>";
//array = tableau en PHP
       $array =[1,2,3,4];
       var_dump($array);
       //isere un élément au début du tableau 
       array_unshift($array, "Coucou");
      // $tableau[] ="Coucou";//pour ajouter un élément au tableau
    //   var_dump($array);
    //     echo $array[5];

        $array[10] = "Test";
        var_dump($array);

        $tableau = $array;
        var_dump($tableau);

        //Opérateur spread : je propage les éléments se trouvant dans $array 
        //au sein de mon $Tableau 
        $monTableau =[...$array];
        //var_dump($monTableau);

        //opérateur spread : comme le précédent mais je le fais  a partir de la deuxiéme position
        $array = ["Autre Valeur ",...$array ] ;
        //var_dump($array);

        $array[15] = $array[3];
        unset($array[3]);
        var_dump($array);

        //boucles
        //for (instruction d'initialisation;condition de maintien;instruction de pas )
        for ($d = 1; $d < 11 ; $d++) {
            echo $d . "<br>";
        }
        echo "<br>";
        //foreach
        foreach($array as $element){
            echo $element ." - ";
        }
        ?>
    
</body>
</html>