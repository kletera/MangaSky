<?php
// Déclaration de variable
$link='<link rel="stylesheet" href="style/commun.css">
    <link rel="stylesheet" href="style/inscrireConnexion.css">';
$script='<script src="script/inscrireConnexion.js" defer></script>
    <script src="script/inscription2.js" defer></script>
    <script src="script/commun.js" defer></script>';
$titre='<title>Inscription</title>';
$metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
$supStyle="";



function dataInscription(){
    //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
    if(empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["verifpassword"])){
        return ["name_user"=>'',"first_name_user"=>'',"login_user"=>'',"password_user"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
    }

    //2nd Etape de sécurité : nettoyage
    $name_user = sanitize($_POST['name_user']);
    $first_name_user = sanitize($_POST['first_name_user']);
    $login_user = sanitize($_POST["login_user"]);
    $password_user = sanitize($_POST["password_user"]);

    //3eme Etape de sécurité : Vérifier que les données sont au bon format
    if(!filter_var($login_user,FILTER_VALIDATE_EMAIL)){
        return ["name_user"=>'',"first_name_user"=>'',"login_user"=>'',"password_user"=>'',"erreur"=>'Login pas au bon format !'];
    }

    //4eme Etape de sécurité : hasher le mot de passe
    $password_user = password_hash($password_user,PASSWORD_BCRYPT);

    return ["name_user"=>$name_user,"first_name_user"=>$first_name_user,"login_user"=>$login_user,"password_user"=>$password_user,"erreur"=>''];
}


?>