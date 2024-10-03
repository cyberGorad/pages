<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - E-Toliara</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-control:focus {
            outline: none;
            border-color: #66afe9;
            box-shadow: 0 0 8px rgba(102,175,233,0.6);
        }
        .btn-primary {
            background-color: #009565;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background-color: #45a049;
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.2);
        }
    </style>


<style>
        .message {
            margin-top: 10px;
            font-size: 20px;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        .admin-input-container {
            display: none; /* Hide by default */
            margin-top: 10px;
        }
        .admin-input-container label {
            display: block;
            margin-bottom: 5px;
        }
        .admin-input-container input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <a href="index.php" class="btn btn-secondary home-link"><i class="fas fa-home"></i></a>
            </div>
        </div>
        <h2 class="mb-4 text-center">Connexion</h2>
        <form action="login_script.php" method="post">
      

            <div class="form-group">
                <label for="email" class="d-block">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre e-mail" required>
            </div>
            <div class="form-group">
                <label for="password" class="d-block">Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe" required>
            </div>
            <button type="submit" class="btn btn-primary d-block w-100 mt-3">Se Connecter</button>
        </form>
        <?php 
            if (isset($_SESSION['success'])) {
                echo '<p class="message success">' . htmlspecialchars($_SESSION['success']) . '</p>';
                unset($_SESSION['success']);
            }
            if (isset($_SESSION['error'])) {
                echo '<p class="message error">' . htmlspecialchars($_SESSION['error']) . '</p>';
                unset($_SESSION['error']);
            }
            ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
