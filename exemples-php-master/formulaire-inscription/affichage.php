<?php
 // Traitement

 // Enregistrement du nom dans le tableau
 $liste_apprenants[] = $_POST["nom"] 
?>

<!-- Affichage -->

<?php
    foreach ($liste_apprenants as $value) {
     echo $value;
    }
?>