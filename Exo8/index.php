<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1 exo8</title>
  </head>
  <body>
      <p>Les valeurs des variables :  <br>
      <?php
        $sum = 3+4;
        $difference = 100-20;
        $product = 45*15;
        $quotient = 45/15;
        // $modulo = fmod(75, 15);
        $modulo = 75 % 15;
        echo "3+4=$sum <br> 100-20=$difference <br> 45*15=$product <br> reste de 75/15 =$modulo";
      ?>
      </p>
    
  </body>
</html>

<!-- Créer 5 variables sum, difference, product, quotient, modulo.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 100 - 20.
Dans la troisième mettre le résultat de l'opération 45 - 15. Dans la quatrième mettre le résultat de l'opération 45 / 15. Dans la cinquième mettre le reste de la division entière 75 / 15.

Afficher le contenu des variables. -->