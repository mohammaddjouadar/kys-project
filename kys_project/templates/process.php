<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        handleLogin();
    } elseif (isset($_POST["register"])) {
        handleRegister();
    }
}

function handleLogin() {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Ajoutez ici votre logique de vérification pour le login
        // Par exemple, comparer avec des informations dans la base de données

        // Pour cet exemple, nous stockons simplement dans un fichier texte
        $data = "Login - Email: $email, Password: $password\n";
        file_put_contents("users.txt", $data, FILE_APPEND);
    }
}

function handleRegister() {
    if (isset($_POST["new-email"]) && isset($_POST["new-password"])) {
        $newEmail = $_POST["new-email"];
        $newPassword = $_POST["new-password"];

        // Ajoutez ici votre logique d'enregistrement
        // Par exemple, enregistrez les informations dans une base de données

        // Pour cet exemple, nous stockons simplement dans un fichier texte
        $data = "Register - Email: $newEmail, Password: $newPassword\n";
        file_put_contents("users.txt", $data, FILE_APPEND);
    }
}
?>
