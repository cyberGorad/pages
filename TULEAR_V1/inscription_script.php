<?php
// Configuration
session_start();
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'db_tulear';

// Connect to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, telephone, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $telephone, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Inscription réussie";
        header("Location: inscription.php");
        exit();

    } else {
        $_SESSION['error'] = "Une erreur s'est produite lors de l'inscription.";
    }

    $stmt->close();
}

$conn->close();
?>
