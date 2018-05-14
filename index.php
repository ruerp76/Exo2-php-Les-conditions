<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 2 - PHP - Les conditions</title>
  </head>
  <body>
    <?php

    // Exercice 1
      $age=17;
      if ($age>=18) {
        echo "Vous êtes majeur";
      }
      else {
        echo "Vous êtes mineur </br>";
        }

        // Exercice 2
        $age=17;
        $genre="femme";
        if ($genre!="homme") {
          echo"Vous êtes une femme";
        }
        else {
          echo "Vous êtes un homme";
        }

        if ($age>=18) {
          echo " et vous êtes majeur";
        }

        else {
          echo " et vous êtes mineur </br>";
        }

        // Exercice 3
        $maVariable='homme';
        if ($maVariable !='homme') {
          echo "C'est une développeuse";
        }
        else {
          echo "C'est un développeur !! </br>";
        }

        // Exercice 4
        $monAge=19;
        if ($monAge>=18) {
          echo "Tu es majeur </br>";
        }
        else {
          echo "Tu n'es pas majeur </br>";
        }

        // Exercice 5
        $maVariable=true;
        if ($maVariable==false) {
          echo "C'est pas bon !!! </br>";
        }
        else {
          echo "C'est ok !! </br>";
        }

        // Exercice 6
        $maVariable=false;
        if ($maVariable==true) {
          echo "C'est ok !!";
        }

        else {
          echo "C'est pas bon !!!";
        }
     ?>
  </body>
</html>
