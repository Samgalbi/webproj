<?php
@include 'config.php';
$servername = "localhost"; // ou l'adresse IP du serveur MySQL
$username = "root"; // le nom d'utilisateur par défaut de XAMPP est "root"
$password = ""; // le mot de passe par défaut de XAMPP est ""
$dbname = "travel"; // le nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insérer les données dans la table signup
    $sql = "INSERT INTO signup (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement réussi";
    } else {
        echo "Erreur lors de l'enregistrement : " . $conn->error;
    }
}
?>




