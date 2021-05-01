<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du TP de développement d'application le 01/02/2020
     Auteur : FERNANDEZ Tony
     Email : IT.Fernandeztony@gmail.com
-->

<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="FERNANDEZ Tony">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="css/modal.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
         <?php
            include('./includes/header.html.inc.php');
        ?>
        <section id="principal">
            <article>
                <img src="images/post-it.png" alt="Post-It : Penser à rentrer en vie">
                <p>
                    Au-delà de l'obligation légale, le port d'un casque est le garant de votre
                    sécurité. Le choix de votre casque doit se faire en fonction de vos besoins 
                    (route, cross, piste...).
                </p>
                <p>
                    Spécialiste reconnu dans l'univers de la sécurité du deux-roues, Nolark vous 
                    propose des milliers de modèles de casques disponibles au travers de plus de 
                    50 marques. Vous trouverez ici tous les types de casques moto : jet, intégral, 
                    modulable, transformable, piste, cross ou encore un large choix de casques 
                    moto enfant (taille et poids spécialement adaptés).
                </p>
                <p>
                    Nolark c'est également la disponibilité de toutes les couleurs et matières et 
                    ce, pour toutes les bourses.
                </p>
                <p>
                    Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin 
                    de trouver le modèle qui correspond à vos besoins.
                </p>
                <p>
                    Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe 
                    de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de 
                    répondre au mieux à vos attentes.
                </p>
            </article>
            <aside>
                <img src="images/conseilcasque01.jpg" alt="Conseil du mois : Casque Cross">
                <p>Pour le style: Furious replica</p>
                <img src="images/conseilcasque02.jpg" alt="Conseil du mois : Intgéral Piste">
                <p>Pour le confort: Stars racing</p>
            </aside>

        </section>
        <section id="thematique">
            <h1>Catégories les plus populaires</h1>
            <article id="gauche"><a href="pages/route.php">Route</a></article>
            <article id="milieu"><a href="pages/cross.php">Cross</a></article>
            <article id="droite"><a href="pages/piste.php">Piste</a></article>
        </section>
        <?php
            include('./includes/footer.inc.php');
        ?>
    </body>
    <div class="cookieContainer"><p>Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation,
                    vous acceptez l’utilisation des cookies. <a href="https://it-fernandeztony.com/HTML/modal.html">En savoir plus</a></p>
                <button class="cookieBtn"> OK </button>
            <script src="js/modal.js" type="text/javascript"></script>
    </div>
</html>
