<?php
require_once("../YAML/yaml/yaml.php");
?>

<!--<!DOCTYPE html> -->
<html lang="fr">

<!-- code N°2 -->

<head>
    <title>Projet port-folio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assetes/CSS/siteperso.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">

</head>
    <body>
        <nav>
            <ul>
                <li class="deroulant">
                    <a href="#accueil"></i></a>
                    <ul class="sous">
                        <li><a href="#accueil">accueil</a></li>
                        <li><a href="#a-propos">à propos</a></li>
                        <li><a href="#competences">compétences</a></li>
                        <li><a href="#experience">expérience</a></li>
                        <li><a href="#formation">formation</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </li>
            </ul> 
        </nav>
        

<!-- section accueil -->
<?php
$data=yaml_parse_file("../assetes/yaml/accueil.yaml");
?>

        <section id="accueil" style="background-color: rgb(36, 173, 173);">
            <h1>Accueil</h1>
            <div class="contenu-accueil">
                <div class="position-image">
                <?php echo '<img src="../../assetes/IMG'.$data['img'].'">'; ?>
                </div>
                <?php echo '<p>'.$data['accroche'].'</p>'; ?>
            </div>
            <footer>
                <a class="arrow-color-left" href="#contact">
                    <span class="arrow-color-left">Page précédente</span>
                    <i class="fa-solid fa-arrow-left-long"></i>
                </a>
                <a class="arrow-color-right" href="#a-propos">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <span class="arrow-color-right">Page suivante</span>
                </a>
            </footer>
        </section>


<!-- section a propos-->     
<?php
$data=yaml_parse_file("../assetes/yaml/à-propo.yaml");
?>

        <section id="a-propos" style="background-color: rgb(49, 4, 70);">
            <h1>à propos</h1>
            <div class="contenu-a-propos">
                <?php echo '<p>'.$data['compétence'].'</p>'; ?> <br>
                <?php echo '<p>'.$data['présentation'].'</p>'; ?>
            </div>
            <footer>
                <a class="arrow-color-left" href="#accueil">
                    <span class="arrow-color-right">Page précédente</span>
                    <i class="fa-solid fa-arrow-left-long"></i>
                </a>
                <a class="arrow-color-right" href="#competences">
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <span class="arrow-color-right">Page suivante</span>
                </a>
            </footer>
        </section>


<!-- section competences -->
<?php
$data=yaml_parse_file("../assetes/yaml/compétance.yaml");

// Parcours des données YAML pour générer des barres de progression
 //foreach ($donnees['barres_de_progression'] as $barre) {
  //  echo '<div class="progress">';
    //echo '<div class="barre" style="width: ' . $barre['progression'] . '%;"></div>';
    //echo '<span>' . $barre['titre'] . '</span>'; // Affiche le titre de la barre
    //echo '</div>';
//}
?>

<section id="competences" style="background-color: rgb(86, 166, 219)">
    <h1>Compétences</h1>
    <div class="contenu-competences">
       <tr>futur php</tr>
    </div>
    <footer>
        <a class="arrow-color-left" href="#a-propos">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#experience">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>
</section>


<!-- section Expériance -->
<?php
$data=yaml_parse_file("../assetes/yaml/éxperiance.yaml");
?>


<section id="experience" style="background-color: rgb(194, 58, 58);">
    <h1>Expérience</h1>
    <div class="contenu-experience">
       <?php echo '<p>'.$data['2020-2021'].' </p>' ?>
       <?php echo '<p>'.$data['2021-2022'].' </p>' ?>
       <?php echo '<p>'.$data['2022-2023'].' </p>' ?>
    </div>

    <footer>
        <a class="arrow-color-left" href="#competences">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#formation">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>
</section>


<!-- section Formation -->
<?php
$data=yaml_parse_file("../assetes/yaml/Formation.yaml");
?>


<section id="formation" style="background-color: rgb(73, 10, 68);">
    <h1>Formation</h1>
    <div class="contenu-formation">
        <?php echo '<p>'.$data['Brevet'].' </p>' ?> <br>
        <?php echo '<p>'.$data['2020-2023'].' </p>' ?> <br>
        <?php echo '<p>'.$data['BTS'].' </p>' ?>
    </div>

    <footer>
        <a class="arrow-color-left" href="#experience">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#contact">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>
</section>

<!-- section Contact -->
<?php
//$data=yaml_parse_file("../assetes/yaml/contact.yaml");
?>


<section id="contact" style="background-color: rgb(138, 93, 35);">
    <h1>Contact</h1>
    <div class ="contenue-contact">
        <tr>futur php</tr>
        <ul>
            <li>
                <ul>
                    <li><a href="https://github.com/MatthieuSA5" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </li>
        </ul> 
    </div>
    <footer>
        <a class="arrow-color-left" href="#formation">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#accueil">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>      
</section>

    <script src="https://kit.fontawesome.com/9dc810df0d.js" crossorigin="anonymous"></script>
    <script src="./../assets/js/site.js"></script> 
</body>
</html>