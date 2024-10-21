<?php
    $link='<link rel="stylesheet" href="./style/commun.css">
        <link rel="stylesheet" href="./style/accueil.css">
        <link rel="stylesheet" href="./style/compte.css">';
    $script='';
    $titre='<title>Mon compte</title>';
    $metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
    $supStyle="";

//Déclaration des variables d'affichage
$email = "";
$pseudo = "";
$mdp = "";
$img ="";

//AFFICHER LES DONNES DE L'UTILISATEURS  ENREGISTREES EN SESSION
//1er Etape : je teste si j'ai bien des SESSIONS d'enregistré
if(isset($_SESSION['id_user'])){
    //2nd Etape : je transmets les données de SESSIONS à mes variables d'affichages
    $email = $_SESSION['email_Users'];
    $pseudo = $_SESSION['pseudo_Users'];
    $mdp = $_SESSION['mdp_Users'];
    $img=$_SESSION['img_Users'];
}

?>