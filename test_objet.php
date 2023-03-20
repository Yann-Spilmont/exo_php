<!-- Créer un fichier test_objet.php qui va nous servir de fichier d’exécution,
Créer une nouvelle classe Maison  maison.php qui va contenir les attributs suivants :
-nom, longueur, largeur.
Instancier une nouvelle maison dans le fichier test_objet.php avec les valeurs de votre choix (nom, longueur et largeur),
-Créer une méthode surface qui calcule et affiche la superficie de la maison (longueur * largeur) dans la classe Maison.
-Appeler la méthode surface et afficher sous la forme suivante le résultat : 
"<p>la surface de nomMaison est égale à : x m2</p>".

Bonus  :
Ajouter un attribut nbrEtage à la classe Maison,
Modifier la méthode surface pour qu’elle prenne en compte le paramètre nbrEtage -->

<?php
    include './maison.php';
    $maison=new maison('maMaison',8,7,2);
    $maison->surface();
?>