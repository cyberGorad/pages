<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Transport</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
            .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            animation: fadeInDown 0.5s ease-out forwards;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


     /* Responsive buttons */
     @media (max-width: 768px) {
        .btn-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: -50px;
        }
        .btn-style {
            width: 100%;
            margin-bottom: 10px;
            text-align: center;
        }
    }
</style>
<body>
    <header class="w3-card-4 fixed-header" style="background-color: #009565;">
        <div class="container">
            <h1>E-Toliara</h1>
            <nav class="header-nav">
                <div class="btn-group">
                    <a href="login.php" class="login-btn w3-hover-opacity btn-style" style="background-color: #FF5733;">
                        <i class="fas fa-sign-in-alt" style="margin-right: 5px;"></i> Connexion
                    </a>
                    <a href="inscription.php" class="signup-btn btn-style" style="background-color: #007F5F;">
                        <i class="fas fa-user-plus" style="margin-right: 5px;"></i> S'inscrire
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <br>
    <main>
        <br><br><br><br><br>
        <section id="transport-list">
            <h2>Liste de Transports</h2>
            <div class="transport-item">
                <h3>Taxi</h3>
                <p>Description: Service de taxi disponible 24/7 dans toute la ville.</p>
            </div>
            <div class="transport-item">
                <h3>Vélib'</h3>
                <p>Description: Location de vélos pour des trajets courts.</p>
            </div>
            <div class="transport-item">
                <h3>RER</h3>
                <p>Description: Réseau Express Régional pour se rendre en banlieue.</p>
            </div>
            <!-- Ajoutez plus d'éléments de transport ici -->
        </section>
    </main>
    




      <!--LOADER BEGIN-->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Attendre 5 secondes avant de masquer le loader
        setTimeout(function() {
            var loader = document.getElementById("loader");
            if (loader) {
                loader.classList.add("hide-loader");
            }
        }, 1000); // 5000 ms = 5 s
    });
</script>

     <!-- Loader -->
     <div id="loader" class="loader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <style>
      /* Style pour le loader */
      .loader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: #f0f0f0;
          display: flex;
          justify-content: center;
          align-items: center;
          z-index: 9999;
      }
      .loader div {
          margin: 10px;
          width: 40px;
          height: 40px;
          background-color: #007F5F;
          border-radius: 50%;
          display: inline-block;
          animation: bounce 1.0s infinite ease-in-out;
      }
      .loader div:nth-child(2) {
          animation-delay: 0.3s;
      }
      .loader div:nth-child(3) {
          animation-delay: 0.6s;
      }
      @keyframes bounce {
          0%, 100% {
              transform: translateY(0);
          }
          50% {
              transform: translateY(-20px);
          }
      }
      /* Style pour masquer le loader après chargement */
      .hide-loader {
          display: none;
      }
  </style>

  <!--LOADER END-->
    <nav class="bottom-nav" style="background-color: #009565;">
        <a href="index.php">
            <i class="fas fa-hotel"></i>
            <span>Hôtels</span>
        </a>
        <a href="restaurants.php">
            <i class="fas fa-utensils"></i>
            <span>Restaurants</span>
        </a>
        <a href="transport.php">
            <i class="fas fa-car" style="color: #00563F;"></i>
            <span>Transport</span>
        </a>
    </nav>
</body>
</html>
