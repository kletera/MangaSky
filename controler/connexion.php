<?php
    // Variable
    $link='<link rel="stylesheet" href="style/commun.css">
        <link rel="stylesheet" href="style/inscrireConnexion.css">';
    $script='<script src="./script/inscrireConnexion.js" defer></script>
        <script src="./script/commun.js" defer></script>';
    $titre='<title>Connexion</title>';
    $metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
    $supStyle="";
    $messageCo=";"

function dataConnexion(){
    //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
    if(empty($_POST["loginCo"]) || empty($_POST["passwordCo"])){
        return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
    }

    //2nd Etape de sécurité : nettoyage
    $loginCo = sanitize($_POST["loginCo"]);
    $passwordCo = sanitize($_POST["passwordCo"]);

    //3eme Etape de sécurité : Vérifier que les données sont au bon format
    if(!filter_var($loginCo,FILTER_VALIDATE_EMAIL)){
        return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Login pas au bon format !'];
    }

    return ["loginCo"=>$loginCo,"passwordCo"=>$passwordCo,"erreur"=>''];
}

if(isset($_POST['connexion'])){
    //je teste les données de connexion envoyés
    $tab = dataTestConnexion();

    //je regarde si je suis dans le cas d'erreur
    if($tab['erreur'] != ''){
        //si c'est le cas : j'affiche l'erreur
        $messageCo = $tab['erreur'];
    }else{
        $user= new Users(null, $tab['loginCo']);
        //Si tout s'est bien passé :
        //Interroger la BDD pour récupérer les données de l'utilisateurs à partir du login entré
        $data = $user->readUserByEmail();

        //Tester si je suis dans le cas d'erreur (problème de communication avec la BDD)
        //Si c'est le cas, je reçois un string, si tout s'est passé je reçois un array
        if(gettype($data) == 'string'){
            $messageCo = $data;
        }else{
            //Tout s'est bien passé
            //Je vérifie la réponse de la BDD : vide ou pas ?
            //Si c'est vide : alors le login n'existe pas en BDD, et j'affiche un message d'erreur
            if(empty($data)){
                $messageCo = "Erreur de Login et/ou de Mot de Passe !";
            }else{
                //Si on trouve le login en BDD
                //Je vérifie la correspondance des mots de passe
                if(!password_verify($tab['passwordCo'],$data[0]['mdp_user'])){
                    //Si les mots de passe ne correspondent pas, j'affiche un message d'erreur
                    $messageCo = "Erreur de Login et/ou de Mot de Passe !";
                }else{
                    //Si les mots de passe correspondent, j'enregistre les données de l'utilisateur en SESSION, et j'affiche un message de confimation
                    $_SESSION['id_Users'] = $data[0]['id_Users'];
                    $_SESSION['pseudo_Users'] = $data[0]['pseudo_Users'];
                    $_SESSION['email_Users'] = $data[0]['email_Users'];
                    $_SESSION['img_Users'] = $data[0]['img_Users'];
                    $_SESSION['id_Manga'] = $data[0]['id_Manga'];
                    $_SESSION['id_User_Type'] = $data[0]['id_User_Type'];
                    
                }
            }
        }
    }
}

?>