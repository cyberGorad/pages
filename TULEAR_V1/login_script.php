<?php
session_start();

// Configuration
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
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Login successful
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['nom'];
                $_SESSION['logged_in'] = true;
                
                header("Location: index.php");
exit();
            } else {
                $_SESSION['error'] = "Mot de passe incorrect";
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "E-mail non trouvé";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Une erreur s'est produite lors de la connexion.";
    }

    $stmt->close();
}

$conn->close();

// Redirect to the login page after processing

?>
