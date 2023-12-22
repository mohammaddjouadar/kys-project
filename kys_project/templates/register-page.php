<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    // Placez ici votre logique de traitement du formulaire d'inscription
    $newEmail = $_POST["new-email"];
    $newPassword = $_POST["new-password"];

    // Ajoutez ici la logique d'enregistrement dans le fichier CSV (confidential.csv)
    $csvFile = "confidential.csv";
    $data = array($newEmail, $newPassword);

    // Ouvrir le fichier CSV en mode ajout
    $file = fopen($csvFile, "a");

    // Écrire les données dans le fichier CSV
    fputcsv($file, $data);

    // Fermer le fichier
    fclose($file);

    // Rediriger l'utilisateur vers la page de connexion
    header("Location: index.html");
    exit();
}
?>
