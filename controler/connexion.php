<?php
    // Ajout du html/CSS/JS et des liens
    $link='<link rel="stylesheet" href="style/commun.css">
        <link rel="stylesheet" href="style/inscrireConnexion.css">';
    $script='<script src="./script/inscrireConnexion.js" defer></script>
        <script src="./script/commun.js" defer></script>';
    $titre='<title>Connexion</title>';
    $metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
    $supStyle="";

function dataTestConnexion():array{
    //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
    if(empty($_POST["emailCo"]) || empty($_POST["passwordCo"])){
        return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
    }

    //2nd Etape de sécurité : nettoyage
    $loginCo = sanitize($_POST["emailCo"]);
    $passwordCo = sanitize($_POST["passwordCo"]);

    //3eme Etape de sécurité : Vérifier que les données sont au bon format
    if(!filter_var($loginCo,FILTER_VALIDATE_EMAIL)){
        return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Login pas au bon format !'];
    }

    return ["loginCo"=>$loginCo,"passwordCo"=>$passwordCo,"erreur"=>''];
}
?>