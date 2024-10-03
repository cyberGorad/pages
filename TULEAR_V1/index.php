
<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_name'])) {
    // Redirigez vers la page de connexion si l'utilisateur n'est pas connecté

}

// Récupérez le nom d'utilisateur de la session
$username = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Toliara</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

 
    
    <style>
        /* Fixed header */
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

        /* Animation for hotel cards */
        .hotel-card {
            transition: all 0.3s ease-in-out;
        }

        .hotel-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        /* Loader animation */
        .loader div {
            margin: 10px;
            width: 40px;
            height: 40px;
            background-color: #007F5F;
            border-radius: 50%;
            display: inline-block;
            animation: bounce 1.0s infinite ease-in-out;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
        <!-- Your existing body content -->



</head>
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


              
    <?php 
    if (isset($_SESSION['user_name'])) {
        echo'<div class="avatar" style="margin-left:10px">';
        echo htmlspecialchars($_SESSION['user_name'][0]);
    }
    ?>
</div>

         <span class="username" style="margin-top:9px"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                    <?php

if (isset($_SESSION['user_name'])) {
    echo '<a href="logout.php" class="signup-btn btn-style" style="background-color: #007F5F;">';
    echo '<i class="fas fa-user-plus" style="margin-right: 5px;"></i> Se déconnecter</a>';
}
?>


            </div>
        </nav>
    </div>
</header>

<style>
    /* Avatar styles */
.avatar {
    display: inline-block;
    width: 40px;
    height: 40px;
    background-color: #007bff;
    border-radius: 50%;
    text-align: center;
    color: white;
    font-weight: bold;
    font-size: 18px;
    line-height: 40px;
    margin-right: 10px;
}

.username {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .navbar nav ul {
        flex-direction: column;
        align-items: center;
    }
    .navbar nav ul li {
        margin: 10px 0;
    }
    .btn-group {
        flex-direction: column;
        align-items: center;
    }
    .btn-style {
        width: 100%;
        margin-bottom: 10px;
        text-align: center;
    }
    .avatar {
        width: 30px;
        height: 30px;
        font-size: 14px;
        line-height: 30px;
    }
    .username {
        display: block;
        margin-top: 5px;
    }
}

</style>


<script>
    function adjustAvatarSize() {
        const avatar = document.querySelector('.avatar');
        if (avatar) {
            const size = Math.min(avatar.offsetWidth, avatar.offsetHeight);
            avatar.style.width = size + 'px';
            avatar.style.height = size + 'px';
            avatar.style.lineHeight = size + 'px';
        }
    }

    window.addEventListener('load', adjustAvatarSize);
    window.addEventListener('resize', adjustAvatarSize);
</script>



    <!-- Content with padding-top to account for fixed header -->
    <main style="padding-top: 70px;">

        <br><br>

        <style>
            img {
              transition: transform 0.3s ease-out;
            }
            
            img:hover {
              transform: scale(1.01);
            }
          
            img::after {
              content: '';
              display: block;
              padding-bottom: 100%;
              overflow: hidden;
            }
                /* Responsive buttons */
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
<br>


<style>
    /*HOTEL INFO STYLE*/
    .hotel-info {
        padding-top:10px;


        border-radius: 10px;

    }
    .hotel-name {
        color: #007F5F;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .hotel-description {
        font-size: 16px;
        color: #333;
        margin-bottom: 15px;
    }
    .rating {
        font-size: 24px;
    }
</style>

<div class="w3-row-padding">
  <!-- Hôtel 1 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/moringa1.jpeg" alt="Hôtel Moringa" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hôtel Moringa</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="far fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel1.php'">Details >></button>
    </div>
  </div>

  <!-- Hôtel 2 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel2.jpeg" alt="Hotel Serena" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel Serena</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel2.php'">Details >></button>
    </div>
  </div>

  <!-- Hôtel 3 -->
  <div class="w3-third w3-container element">
    <img src="images/hotel3.jpeg" alt="Hotel Saifee" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel Saifee</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="far fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel3.php'">Details >></button>
    </div>
  </div>
</div>
<br>

<!-- Second Photo Grid-->
<div class="w3-row-padding">
  <!-- Hôtel 4 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel4.jpeg" alt="Hôtel Palétuvier" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hôtel Palétuvier</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="far fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel4.php'">Details >></button>
    </div>
  </div>

  <!-- Hôtel 5 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel5.jpeg" alt="Hôtel Victory" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hôtel Victory</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="far fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel5.php'">Details >></button>
    </div>
  </div>

  <!-- Hôtel 6 -->
  <div class="w3-third w3-container element">
    <img src="images/hotel6.jpeg" alt="Hôtel Amazone" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hôtel Amazone</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="far fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel6.php'">Details >></button>
    </div>
  </div>
</div>




<br>


  <!-- Hôtel 2 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel2.jpeg" alt="Hotel Serena" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel pamplemousse</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel7.php'">Details >></button>
    </div>
  </div>




  <!-- Hôtel 2 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel2.jpeg" alt="Hotel Serena" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel Eden</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>100000-300000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel8.php'">Details >></button>
    </div>
  </div>





  <!-- Hôtel 2 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel2.jpeg" alt="Hotel Serena" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel Mayanah</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>40000-100000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel9.php'">Details >></button>
    </div>
  </div>





  <!-- Hôtel 2 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel2.jpeg" alt="Hotel Serena" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel Sisal</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>40000-100000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>
    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel10.php'">Details >></button>
    </div>
  </div>



  <!-- Hôtel 2 -->
  <div class="w3-third w3-container w3-margin-bottom element">
    <img src="images/hotel2.jpeg" alt="Hotel Serena" style="width:100%" class="w3-hover-opacity">
    <div class="w3-container w3-white">
      <div class="hotel-info">
        <h2 class="hotel-name">Hotel Vahombey</h2>
        <p class="hotel-description"><span><strong>Fourchette:</strong>40000-100000Ar</span></p>
        <div class="rating">
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
          <i class="fas fa-star" style="color: #ffd700;"></i>
        </div>
      </div>
    </div>

    <div class="w3-right-align">
      <button class="w3-button w3-green" onclick="location.href='hotel11.php'">Details >></button>
 
    </div>

  </div>





<br><br><br><h1 style="opacity:0">test</h1>











        <!-- Rest of your HTML remains unchanged -->

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

        <!--TRANSITION BEGIN-->
        <style>.element {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        
        .element.visible {
            opacity: 1;
            transform: translateY(0);
        }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const elements = document.querySelectorAll('.element');

                elements.forEach(element => {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                element.classList.add('visible');
                                observer.unobserve(element);
                            }
                        });
                    }, { threshold: 0.1 });

                    observer.observe(element);
                });
            });
        </script>
        
        <!--TRANSITION END-->

         <!--GOOGLE MAPS EXAMPLE
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d355.92226898270957!2d43.67751102894545!3d-23.353506121328714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f647d00346901bf%3A0x93094855aa8c6e12!2sJEUX%20PC%20TOLIARA!5e1!3m2!1sfr!2smg!4v1726159418081!5m2!1sfr!2smg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d355.93533137577805!2d43.677900961631245!3d-23.348635605866082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2smg!4v1726159561334!5m2!1sen!2smg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        -->
        
        
        
                <nav class="bottom-nav" style="background-color: #009565;">
            <a href="index.php">
                <i class="fas fa-hotel" style="color: #00563F;"></i>
                <span>Hôtels</span>
            </a>
            <a href="restaurants.php">
                <i class="fas fa-utensils"></i>
                <span>Restaurants</span>
            </a>
            <a href="transport.php">
                <i class="fas fa-car"></i>
                <span>Transport</span>
            </a>

        </nav>
    </main>


</body>
</html>
