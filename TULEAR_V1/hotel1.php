
<?php
session_start();


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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

 
    
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











<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 mb-5">
            <div class="slideshow-container">
                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>

                    <img src="images/moringa1.jpeg" class="img-fluid">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/moringa2.jpeg" class="img-fluid">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/moringa3.jpeg" class="img-fluid">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </div>

        <div class="col-md-4  " style="padding:20px">
        <h2>A propos de nous</h2><br>
        <h4 style="color:orange">BUDGET:10000Mga - 20000Mga</h4>
<p>
    <strong>Nom de l'hôtel :</strong> Hôtel Toliara Beach<br>
    <strong>Adresse :</strong> 123, Boulevard de la Mer, Toliara, Madagascar<br>
    <strong>Étoiles :</strong> 4/5<br>
    <strong>Chambres disponibles :</strong> 50<br>
    <strong>Prix moyen par nuit :</strong> 150€<br>
    <strong>Services :</strong> Piscine, restaurant, bar, Wi-Fi gratuit, parking privé<br>
    <strong>Activités à proximité :</strong> Plage, snorkeling, excursions en bateau, randonnée
    
</p>
<!--<button type="button" class="btn btn-lg mt-3 w3-hover-opacity" style="background-color:orange">
    Réserver
    <i class="fas fa-arrow-right ms-2"></i>
</button>-->

<button type="button" class="btn btn-lg mt-3 w3-hover-opacity" style="background-color:orange" onclick="location.href='hotel1_maps.php'">
    localisation
    <i class="fas fa-arrow-right ms-2"></i>
</button>

<button type="button" class="btn btn-lg mt-3 w3-hover-opacity" style="background-color:green" onclick="location.href='index.php'">
    vour autres

</button>

        </div>
    </div>
</div>


<br>
<!--rond
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
</div>
-->

<style>
/* Styles pour le carrousel */


.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}

.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active, .dot:hover {
    background-color: #717171;
}

.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
}

@media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
}
</style>

<script>
// Initialisation du carrousel
/// Initialisation du carrousel
let slideIndex = 1;
let slidesLoaded = 0;
let totalSlides = 0;

// Fonction pour charger les images
function loadImages() {
    let slides = document.getElementsByClassName("mySlides");
    totalSlides = slides.length;

    for (let i = 0; i < slides.length; i++) {
        let img = slides[i].querySelector('img');
        if (img.complete) {
            imageLoaded();
        } else {
            img.onload = imageLoaded;
        }
    }
}

// Fonction appelée lorsque chaque image est chargée
function imageLoaded() {
    slidesLoaded++;
    if (slidesLoaded === totalSlides) {
        showSlides(slideIndex);
        startAutoSlide();
    }
}

// Fonction pour afficher les slides
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        slides[i].style.opacity = 0;
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.display = "block";  
    slides[slideIndex-1].style.opacity = 1;
    dots[slideIndex-1].className += " active";

    // Ajoutez une transition pour l'opacité
    slides[slideIndex-1].style.transition = "opacity 0.5s ease-in-out";
}

// Fonction pour faire défiler les slides
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Fonction pour aller à un slide spécifique
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Fonction pour faire défiler automatiquement les slides
function autoSlide() {
    plusSlides(1);
}

// Fonction pour démarrer le défilement automatique
function startAutoSlide() {
    setTimeout(autoSlide, 10000);
    setInterval(autoSlide, 5000);
}

// Démarrer le chargement des images
loadImages();


</script>


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
        <i class="fas fa-info" style="color: #00563F;"></i>
        <span>detail</span>
    </a>
    <a href="hotel1_maps.php">
        <i class="fas fa-map-marker-alt"></i>
        <span>Location</span>
    </a>

    <a href="transport.php">
        <i class="fas fa-motorcycle"></i>
        <span>Transport</span>
    </a>
</nav>

    </main>



</body>
</html>
