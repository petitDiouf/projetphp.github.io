<?php require_once 'connect.php'; ?>

<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>SEN RESTO</title>
<body>
<header>
    <a href="#" class="logo"><span>SEN R</span>ESTO</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        <a href="connexion.php" class="btn-reserve"onclick="toggleMenu();">Connexion</a>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Que Des Plats Délicieux</h2>
        <a href="#menu" class="btn1">Notre Menu</a>
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p>Une sociétée de restauration créer par des jeunes passionnés et ambitieux qui facilite à ses clients d'acheter des plats délicieux à un bon prix.
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="./images/plat3.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>faites vos réservation</p>
    </div>
    <div class=" contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/Cheeken.jpg" alt="">
            </div>
            <div class="text">
                <h3>Jolof Cheeken</h3>
                <h4>3500f</h4>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/riz-frit-sauce-crevettes.jpg" alt="">
            </div>
            <div class="text">
                <h3>Riz-Frit-Sauce-Crevettes</h3>
                <h4>2400f</h4>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/pizza.jpg" alt="">
            </div>
            <div class="text">
                <h3>pizza</h3>
                <h4>4000f</h4>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/poisson-roti.jpg" alt="">
            </div>
            <div class="text">
                <h3>Poisson Roti</h3>
                <h4>5000f</h4>
            </div>
        </div>
        <div>  
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/hamburger.jpg" alt="">
            </div>
            <div class="text">
                <h3>hamburger</h3>
                <h4>2500f</h4>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/Sandwich.jpg" alt="">
            </div>
            <div class="text">
                <h3>Sandwich</h3>
                <h4>1200f</h4>
            </div>
        </div>
    </div>
 </div>
</section>
<section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Nos <span>E</span>xperts</h2>
        <p> </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="images/chef Moussa.jpg" alt="">
            </div>
            <div class="text">
                <h3>Moussa Faye</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/awa.jpg" alt="">
            </div>
            <div class="text">
                <h3>Awa Ndiaye</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/Petii.JPG" alt="foto peti">
            </div>
            <div class="text">
                <h3>Elhadji cheikh Diouf</h3>
            </div>
        </div>
        <div class="box">
        </div>
    </div>
 </div>
</section>
 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
        <p>Qu'ils sont satisfaites de nous et de nos plats</p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/Bamba.JPG" alt="foto Bamba">
            </div>
            <div class="text">
                <p>Je suis content et satisfait de ce restaurant.</p>
                <h3>Bamba</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/Suzz.JPG" alt="foto Ibrahima">
            </div>
            <div class="text">
                <p>Cette restaurant est trop chic il y'a dela qualité et d'hygiéne.</p>
                <h3>Ibrahima</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/baye.JPG" alt="foto Talla">
            </div>
            <div class="text">
                <p>j'aime cette resto il est trop classe chaque fois j'ai envie d'y être.</p>
                <h3>Ablaye</h3>
            </div>
        </div>
    </div>
 </section>
 <section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-text"><span>C</span>ontact</h2>
            <p>faites vos réservation.</p>
        </div>
        <form action="" method="POST">
            <div class="contactform">
                <h3>Envoyer un message</h3>
                <div class="inputboite">
                    <input type="text" name="prenomnom" placeholder="Prenom Nom">
                </div>
                <div class="inputboite">
                    <input type="text" name="lieulivraison" placeholder="Lieu de livraison">
                </div>
                <div class="inputboite">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="inputboite">
                    <textarea name="commande" placeholder="Commande"></textarea>
                </div>
                <div class="inputboite">
                    <input type="submit" name="envoyer">
                </div>
            </div>
        </form>
 </section>
 <div class="copyright">
     <p>Restaurant<a href="#">5etoiles</a></p>
 </div>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>

<?php 
if(isset($_POST['envoyer'])){
    if(!empty($_POST['prenomnom']) && !empty($_POST['lieulivraison']) 
    && !empty($_POST['email']) && !empty($_POST['commande'])){
        $prenomnom = htmlspecialchars($_POST['prenomnom']);
        $lieulivraison = htmlspecialchars($_POST['lieulivraison']);
        $email = htmlspecialchars($_POST['email']);
        $commande = htmlspecialchars($_POST['commande']);

        $insert = "INSERT INTO commande (prenom, lieulivraison, email, commande) VALUES (?,?,?,?)";
        $prepare = $bdd->prepare($insert);
        $prepare->execute(array($prenomnom, $lieulivraison, $email, $commande));
        if($insert){
            header('location:index.php');   
        };
    };
};

?>