<?php
// Vérifie que nom et email sont bien envoyés (tu peux ajouter plus tard parcours, niveau, etc.)
if (
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['email']) && !empty($_POST['email'])
) {
    // Redirection vers la page d'accueil 1
    header("Location: page d'accueil 1.html");
    exit();
} else {
    echo "<h2 style='color:red; text-align:center;'>Veuillez remplir tous les champs obligatoires.</h2>";
    echo "<p style='text-align:center;'><a href='formulaire.html'>Retour au formulaire</a></p>";
}
?>
